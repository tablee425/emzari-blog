@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection


@section('content')
    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <main role="main" class="container" style="margin-top: 70px; background: #cde;">
        <section style="margin-top: 10px;">
            <div class="row">
                <div class="col-sm-8" style="background: #cde; padding-left: 0; padding-right: 0;">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-xs-12 post-container">
                                <article>
                                    <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="more">more</a>
                                    <div class="img-wrapper"><img class="posts-thumb-img" src="{{ URL::asset('uploads/'.$post->image) }}" alt="" /></div>
                                    <h1>{{ $post->title }}</h1>
                                    <p>{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</p>
{{--                                    <div class="posts-thumb">--}}
{{--                                        <a href="{{ route('post.read', ['post_id' => $post->id]) }}"><img class="posts-thumb-img" src="{{ URL::asset('uploads/'.$post->image) }}"></a>--}}
{{--                                    </div>--}}
    {{--                                <div class="post-info">--}}
    {{--                                    <div class="post-title">{{ $post->title }}</div>--}}
    {{--                                    <div class="post-date">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></div>--}}
    {{--                                    <div class="post-body-dot">{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</div>--}}
    {{--                                    <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="post-list-read-more">Read More</a>--}}
    {{--                                </div>--}}
                                </article>
                            </div>
                            <div class="post-bottom-line"></div>
                        @endforeach
                    </div>
                    <nav class="" style="padding-left: 20px;">
                        {{ $posts->links() }}
                    </nav>

                </div>

                <aside class="col-sm-3" style="margin-left: 50px; margin-top: 20px; padding-left: 0px; padding-right: 0px;">
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
                        <div class="right-side-title">LAYOUT</div>
                    </div>
                    <div class="widget-content" style="padding-bottom: 15px;">
                        <div class="btn-group pull-left" id="switch-view">
                            <button class="btn btn-primary active" id="post-home-layout-1">
                                <span class="fa fa-th-list"></span>
                            </button>
                            <button class="btn btn-primary" id="post-home-layout-2">
                                <span class="fa fa-th-large"></span>
                            </button>
                        </div>
                    </div>

                    <div class="widget-title" style="margin-top: 10px;">
                        <div class="right-side-title">RECENT POSTS</div>
                    </div>
                    <div class="widget-content">
                        @foreach($archives as $archive)
                            @if($loop->last)
                                <div class="item-thumbnail-only-last">
                                    <div class="item-thumbnail">
                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}"><img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}"></a>
                                    </div>
                                    <div class="item-title">
                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="item-thumbnail-only">
                                    <div class="item-thumbnail">
                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}"><img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}"></a>
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

    <script>
        $(document).ready(function() {
            $("#post-home-layout-1").click(function(){
                $("#post-home-layout-1").addClass("active");
                $("#post-home-layout-2").removeClass("active");
                $(".post-container").removeClass("bloc col-xs-4", 500);
            });
            $("#post-home-layout-2").click(function(){
                $("#post-home-layout-2").addClass("active");
                $("#post-home-layout-1").removeClass("active");
                $(".post-container").addClass("bloc col-xs-4", 500);
            });
        });
    </script>
@endsection

