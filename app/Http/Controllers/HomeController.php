<?php

namespace App\Http\Controllers;

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

    public function createPost(Request $request){
        $file = $request->file('image');
        if ($this->is_image($file)) {
            $file_uuid = Str::uuid().'.'.$file->getClientOriginalExtension();
            if ($file) {
                Storage::disk('public')->put($file_uuid, file_get_contents($file));
            } else {
                $file_uuid = '';
            }
            $post = Post::create(array(
                'title' => Input::get('title'),
                'description' => Input::get('description'),
                'image' => $file_uuid,
                'author' => Auth::user()->id
            ));
            return redirect()->route('home')->with('success', 'Post has been successfully added!');        
        } else {
            return back()->with('Failed', 'Please upload the image file.');
        }
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('post/post_detail', ['post' => $post]);
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