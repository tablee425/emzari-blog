<?php

namespace App\Http\Controllers;

use App\Summernote;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

    public function getPostForm() {
        return view('post/post_form');
    }

    public function createPost(Request $request) {

        $detail=$request->summernoteInput;

        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getelementsbytagname('img');

        $iter = 0;
        $thumbnail = '';
        foreach($images as $k => $img){
            $data = $img->getattribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/uploads/'. $image_name;

            file_put_contents($path, $data);

            $img->removeattribute('src');
            $img->setattribute('src', '/uploads/' . $image_name);

            if ($iter == 0) {
                $thumbnail = $image_name;
            }

            $iter++;
        }
        if ($thumbnail == '') {
            $thumbnail = '15587351930.png';
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

        return redirect()->route('home')->with('success', 'Post has been successfully added!');

//        $file = $request->file('image');
//        if ($this->is_image($file)) {
//            $file_uuid = Str::uuid().'.'.$file->getClientOriginalExtension();
//            if ($file) {
//                Storage::disk('public')->put($file_uuid, file_get_contents($file));
//            } else {
//                $file_uuid = '';
//            }
//            $post = Post::create(array(
//                'title' => Input::get('title'),
//                'description' => Input::get('description'),
//                'image' => $file_uuid,
//                'author' => Auth::user()->id
//            ));
//            return redirect()->route('home')->with('success', 'Post has been successfully added!');
//        } else {
//            return back()->with('Failed', 'Please upload the image file.');
//        }

    }

    public function getPost($id){
        $myposts = DB::table('users')
            ->leftjoin('posts', 'users.id', '=', 'posts.author')
            ->where('users.email', Auth::user()->email);
        $count = $myposts->count();

        $post = Post::find($id);

        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $summernote = new Summernote;
        $summernote->content = $post->description;

        return view('post/post_detail', ['post' => $post, 'archives' => $archives, 'count' => $count], compact('summernote'));
    }

    public function editPost($id) {
        $post = Post::find($id);
        return view('post/edit_post', ['post' => $post]);
    }

    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home')->with('success', 'Post has been updated successfully!');
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfully!');
    }

    function is_image($path)
    {
        $a = getimagesize($path);
        $image_type = $a[2];
        
        if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
        {
            return true;
        }
        return false;
    }
}