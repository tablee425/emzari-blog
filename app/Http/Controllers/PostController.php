<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function getIndex() {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(5);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $data = array(
            'posts' => $posts,
            'archives' => $archives
        );
        return view('post/index', $data);
    }
    public function getFullPost($post_id) {
        $post = DB::table('posts')->leftjoin('users', 'users.id', '=', 'posts.author')->where('posts.id', '=', $post_id)->first();

        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();

        return view('post/read', ['post' => $post, 'archives' => $archives]);
    }
}
