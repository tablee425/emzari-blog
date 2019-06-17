<?php
namespace App\Http\Controllers;
use App\Subscribe;
use App\Tag;
use App\Summernote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use mysql_xdevapi\Session;

class PostController extends Controller
{
    public function getIndex() {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(5);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $tags = DB::table('tags')->get();
        if (count(DB::table('posts')->get()) == 0) {
            $posts = [];
        }
        $data = array(
            'posts' => $posts,
            'archives' => $archives,
            'tags' => $tags
        );
        return view('post/index', $data);
    }
    
    public function getIndexLayoutGrid() {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(5);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $tags = DB::table('tags')->get();
        if (count(DB::table('posts')->get()) == 0) {
            $posts = [];
        }
        $data = array(
            'posts' => $posts,
            'archives' => $archives,
            'tags' => $tags
        );
        return view('post/index_grid', $data);
    }
    
    public function getIndexWithTag($id) {
        $posts = DB::table('users')->where('tag', $id)->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(5);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $tags = DB::table('tags')->get();
        if (count(DB::table('posts')->where('tag', $id)->get()) == 0) {
            $posts = [];
        }
        $data = array(
            'posts' => $posts,
            'archives' => $archives,
            'tags' => $tags
        );
        return view('post/index', $data);
    }
    
    public function getFullPost($post_id) {
        $post = DB::table('posts')->leftjoin('users', 'users.id', '=', 'posts.author')->where('posts.id', '=', $post_id)->first();

        $archives = DB::table('posts')->orderBy('id', 'DESC')->take(3)->get();
        $tags = DB::table('tags')->get();
        $summernote = new Summernote;
        $summernote->content = $post->description;

        return view('post/read', ['post' => $post, 'archives' => $archives, 'tags' => $tags, 'post_id' => $post_id], compact('summernote'));
    }
    
    public function sendSubscription(Request $request)
    {
        $token = Str::uuid();
        $subscribe = new Subscribe;
        $subscribe->email = $request->subscribe_email;
        $subscribe->name = $request->subscribe_name;
        $subscribe->token = $token;
        $subscribe->confirmed = false;
        $email = $request->subscribe_email;
        
        $found = DB::table('subscribes')->where('email', $request->subscribe_email)->get();
        if ($found->count() == 0) { // first send
            $subscribe->save();
            $data = array (
                'token' => $token
            );
            Mail::send ( 'email/subscribe_send', $data, function ($message) use ($email) {
                $message->from( 'no-reply@emzariblog.com', 'Emzari News' );
                $message->to( $email )->subject ( 'Confirm your subscription to the Emzari News email list' );
            } );
            return view('subscribe/subscribed');
        } else if ($found[0]->confirmed == 0) { // already sent and not confirmed
            DB::table('subscribes')->where('email', $request->subscribe_email)->update(['token' => $token]);
            $data = array (
                'token' => $token
            );
            Mail::send ( 'email/subscribe_send', $data, function ($message) use ($email) {
                $message->from ( 'no-reply@emzariblog.com', 'Emzari News' );
                $message->to( $email )->subject ( 'Confirm your subscription to the Emzari News email list' );
            } );
            return view('subscribe/resent_subscribed');
        } else { // already sent and confirmed
            return view('subscribe/already_subscribed');
        }
    }
    
    public function updateSubscription($token) {
        $found = DB::table('subscribes')->where('token', $token)->get();
        if ($found->count() == 0) {
            return redirect()->route('subscription.confirmed')->with('status', 'SessionExpiredToken~13683432126848694534');
        } else {
            DB::table('subscribes')->where('token', $token)->update(['confirmed' => true]);
            return redirect()->route('subscription.confirmed')->with('status', $found[0]->name);
        }
    }
    
    public function updateUnsubscription($token) {
        $found = DB::table('subscribes')->where('token', $token)->get();
        if ($found->count() == 0) {
            return redirect()->route('subscription.unsubscribed')->with('status', 'SessionExpiredToken~13683432126848694534');
        } else {
            DB::table('subscribes')->where('token', $token)->delete();
            return redirect()->route('subscription.unsubscribed')->with('status', $found[0]->name);
        }
    }
    
    public function confirmed() {
        return view('subscribe/confirmed');
    }
    
    public function unsubscribed() {
        return view('subscribe/unsubscribed');
    }
    
    public function emailnotification() {
        return view('email/notification');
    }
    
    public function getSubscribeForm() {
        return view('subscribe/subscribe');
    }
}
