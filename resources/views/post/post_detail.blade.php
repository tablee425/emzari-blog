@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 70px">
        <section style="margin-top: 10px;">
            <div class="row">
                <div class="col-sm-7 offset-sm-1" style="background: white; padding: 20px;">
                    <div class="blog-post">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <p class="post-date-border"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>
                        <div class="post-desc">{!! $summernote->content !!}</div>
                    </div>

                    <form class="text-center border border-light p-5 m-5">
                        <p class="h4 mb-4">SUBSCRIBE TO OUR NEWSLETTER</p>
                        <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
                        <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">
                        <button class="btn btn-info btn-block" type="submit">Submit</button>
                    </form>
                </div>

                <aside class="col-sm-3" style="margin-left: 10px; padding-left: 0px; padding-right: 0px;">
                    <div class="widget-title">
                        <div class="right-side-title">ABOUT ME</div>
                    </div>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <img src="{{ URL::asset('uploads/15589569920.png') }}" style="width: 100%; height: auto;" >
                        <div class="font-weight-bold" style="margin-top: 10px;">{{ Auth::user()->name }}</div>
                        <div class="font-weight-bold" style="margin-top: 10px;">Posted: {{ $count }}</div>

                        <div>
                            <a href="{{ route('post.getform') }}">
                                <button type="button" class="btn btn-primary btn-sm" style="margin-top: 10px;">Create New Post</button>
                            </a>
                        </div>

                        <div style="margin-top: 10px;">
                            <a href="{{ route('post.edit', ['id' => $post->id]) }}">
                                <button type="button" class="btn btn-primary btn-sm">Edit Post</button>
                            </a>

                            <a href="{{ route('post.delete', ['id' => $post->id]) }}">
                                <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                            </a>
                        </div>
                    </div>

                    <div class="widget-title" style="margin-top: 10px;">
                        <div class="right-side-title">CLOUD LABELS</div>
                    </div>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <a href="{{ route('index') }}"><span class="badge badge-default">All</span></a>
                        <span class="badge badge-default">Tech</span>
                        <span class="badge badge-primary">Video</span>
                        <span class="badge badge-secondary">Foods</span>
                        <span class="badge badge-success">Labels</span>
                        <span class="badge badge-danger">Blogger</span>
                    </div>

                    <div class="widget-title" style="margin-top: 10px;">
                        <div class="right-side-title">RECENT POSTS</div>
                    </div>
                    <div class="widget-content">
                        @foreach($archives as $archive)
                            @if($loop->last)
                                <div class="item-thumbnail-only-last">
                                    <div class="item-thumbnail">
                                        <img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}">
                                    </div>
                                    <div class="item-title">
                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="item-thumbnail-only">
                                    <div class="item-thumbnail">
                                        <img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}">
                                    </div>
                                    <div class="item-title">
                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </aside>
            </div>
        </section>
    </main>
@endsection