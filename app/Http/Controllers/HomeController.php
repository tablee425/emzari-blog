<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Summernote;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myposts = DB::table('users')
            ->leftjoin('posts', 'users.id', '=', 'posts.author')
            ->where('users.email', Auth::user()->email);
        $count = $myposts->count();
        $posts = $myposts->paginate(7);
        
        $author = DB::table('users')->where('email', Auth::user()->email)->get()->first()->id;
        
        $archives = DB::table('posts')->where('author', $author)->orderBy('id', 'DESC')->take(3)->get();
        return view('home', ['posts' => $posts, 'count' => $count, 'archives' => $archives]);
    }
    
    public function getPostForm($id)
    {
        $tag = DB::table('tags')->where('tagId', $id)->get();
        return view('post/post_form', ['tagName' => $tag[0]->tagName]);
    }
    
    public function createPost(Request $request)
    {
        var_dump($request->summernoteInput);
        die;
        $detail = $request->summernoteInput;
        
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
        $images = $dom->getelementsbytagname('img');
        
        $iter = 0;
        $thumbnail = '';
        foreach ($images as $k => $img) {
            $data = $img->getattribute('src');
            
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            
            $data = base64_decode($data);
            $image_name = time().$k.'.png';
            $path = public_path().'/uploads/'.$image_name;
            
            file_put_contents($path, $data);
            
            $img->removeattribute('src');
            $img->setattribute('src', '/uploads/'.$image_name);
            
            if ($iter == 0) {
                $thumbnail = $image_name;
            }
            
            $iter++;
        }
        if ($thumbnail == '') {
            $thumbnail = 'no-image.png';
        }
        
        $author = DB::table('users')->where('email', Auth::user()->email)->get()->first()->id;
        
        $detail = $dom->savehtml();
        $post = new Post;
        $post->title = $request->title;
        $post->description = $detail;
        $post->strip_description = strip_tags($detail);
        $post->image = $thumbnail;
        $post->author = $author;
        $post->save();
        $new_id = $post->id;
        
        // send notification to the subscribed users
        $subscribes = DB::table('subscribes')->where('confirmed', true)->get();
        if ($subscribes->count() > 0) {
            $data = array(
                'thumbnail' => $thumbnail,
                'title' => $request->title,
                'shortbody' => strip_tags($detail),
                'link' => 'http://172.20.11.50/post/read/' . $new_id
            );
            $emails = array();
            foreach ($subscribes as $subscribe_key => $subscribe) {
                array_push($emails, $subscribe->email);
            }
            Mail::send ( 'email/notification', $data, function ($message) use ($emails) {
                $message->from( 'no-reply@emzariblog.com', 'Emzari News' );
                $message->to( $emails )->subject ( 'New post has been created.' );
            } );
        }
    
        return redirect()->route('home')->with('success', 'Post has been successfully added!');
    }
    
    public function getPost($id)
    {
        $myposts = DB::table('users')
            ->leftjoin('posts', 'users.id', '=', 'posts.author')
            ->where('users.email', Auth::user()->email);
        $count = $myposts->count();
        
        $post = Post::find($id);
        
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $summernote = new Summernote;
        $summernote->content = $post->description;
        
        return view('post/post_detail', ['post' => $post, 'archives' => $archives, 'count' => $count],
            compact('summernote'));
    }
    
    public function editPost($id)
    {
        $myposts = DB::table('users')
            ->leftjoin('posts', 'users.id', '=', 'posts.author')
            ->where('users.email', Auth::user()->email);
        $count = $myposts->count();
        
        $post = Post::find($id);
        
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $summernote = new Summernote;
        $summernote->content = $post->description;
        
        return view('post/edit_post', ['post' => $post, 'archives' => $archives, 'count' => $count],
            compact('summernote'));
    }
    
    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        
        $detail = $request->summernoteInput;
        
        libxml_use_internal_errors(true);
        $dom = new \domdocument();
        $dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'),
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
        $images = $dom->getelementsbytagname('img');
        
        $iter = 0;
        $thumbnail = '';
        foreach ($images as $k => $image) {
            $src = $image->getattribute('src');
            
            if ($iter == 0) {
                $link_array = explode('/', $src);
                $thumbnail = end($link_array);
            }
            
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                
                $image_name = uniqid('', true).'.'.$mimeType;
                $path = '/uploads/'.$image_name;
                
                if ($iter == 0) {
                    $thumbnail = $image_name;
                }
                
                Image::make($src)
                    ->resize(750, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->encode($mimeType, 80)
                    ->save(public_path($path));
                
                $image->removeAttribute('src');
                
                $path_link = explode('/', $path);
                
                $image->setAttribute('src', '/uploads/'.end($path_link));
            }
            
            $iter++;
        }
        
        if ($thumbnail == '') {
            $thumbnail = 'no-image.png';
        }
        
        $author = DB::table('users')->where('email', Auth::user()->email)->get()->first()->id;
        
        $detail = $dom->savehtml();
        $post->description = $detail;
        $post->strip_description = strip_tags($detail);
        $post->image = $thumbnail;
        $post->author = $author;
        
        $post->save();
        return redirect()->route('home')->with('success', 'Post has been updated successfully!');
    }
    
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfully!');
    }
    
    function is_image($path)
    {
        $a = getimagesize($path);
        $image_type = $a[2];
        
        if (in_array($image_type, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP))) {
            return true;
        }
        return false;
    }
}