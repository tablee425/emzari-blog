@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <main role="main" class="container" style="margin-top: 70px">
        <section style="margin-top: 10px;">
            <div class="row">
                <div class="col-sm-7 offset-sm-1" style="background: white; padding-left: 0px; padding-right: 0px;">
                    @foreach($posts as $post)
                        <div class="post-container">
                            <div class="posts-thumb">
                                <img class="posts-thumb-img" src="{{ URL::asset('uploads/'.$post->image) }}">
                            </div>
                            <div class="post-info">
                                <div class="post-title">{{ $post->title }}</div>
                                <div class="post-date">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></div>
                                <div class="post-body-dot">{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</div>
                                <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="post-list-read-more">Read More</a>
                            </div>
                        </div>
                        <div class="post-bottom-line"></div>
                    @endforeach
                    <nav class="" style="padding-left: 20px;">
                        {{ $posts->links() }}
                    </nav>
                </div>

                <aside class="col-sm-3" style="margin-left: 10px; padding-left: 0px; padding-right: 0px;">
                    <div class="widget-title">
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
