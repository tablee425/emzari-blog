@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
{{--    <main role="main" class="container" style="margin-top: 70px">--}}
{{--        <section style="margin-top: 10px;">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-8" style="background: #cde; padding-left: 0; padding-right: 0;">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($posts as $post)--}}
{{--                            <div class="col-xs-12 post-container">--}}
{{--                                <article>--}}
{{--                                    <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="more">more</a>--}}
{{--                                    <div class="img-wrapper"><img class="posts-thumb-img" src="{{ URL::asset('uploads/'.$post->image) }}" alt="" /></div>--}}
{{--                                    <h1>{{ $post->title }}</h1>--}}
{{--                                    <p>{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</p>--}}
{{--    --}}{{--                                    <div class="posts-thumb">--}}
{{--    --}}{{--                                        <a href="{{ route('post.detail', ['id' => $post->id]) }}"><img class="posts-thumb-img" src="{{ URL::asset('uploads/'.$post->image) }}"></a>--}}
{{--    --}}{{--                                    </div>--}}
{{--    --}}{{--                                    <div class="post-info">--}}
{{--    --}}{{--                                        <div class="post-title">{{ $post->title }}</div>--}}
{{--    --}}{{--                                        <div class="post-date">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></div>--}}
{{--    --}}{{--                                        <div class="post-body-dot">{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</div>--}}
{{--    --}}{{--                                        <a href="{{ route('post.detail', ['id' => $post->id]) }}" class="post-list-read-more">Read More</a>--}}
{{--    --}}{{--                                    </div>--}}
{{--                                </article>--}}
{{--                            </div>--}}
{{--                            <div class="post-bottom-line"></div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <nav class="" style="padding-left: 20px;">--}}
{{--                        {{ $posts->links() }}--}}
{{--                    </nav>--}}
{{--                </div>--}}

{{--                <aside class="col-sm-3" style="margin-left: 50px; margin-top: 20px; padding-left: 0px; padding-right: 0px;">--}}
{{--                    <div class="widget-title">--}}
{{--                        <div class="right-side-title">ABOUT ME</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content" style="padding-bottom: 15px;">--}}
{{--                        <img src="{{ URL::asset('uploads/15589569920.png') }}" style="width: 100%; height: auto;" >--}}
{{--                        <div class="font-weight-bold" style="margin-top: 10px;">{{ Auth::user()->name }}</div>--}}
{{--                        <div class="font-weight-bold" style="margin-top: 10px;">Posted: {{ $count }}</div>--}}
{{--                        <a href="{{ route('post.getform') }}">--}}
{{--                            <button type="button" class="btn btn-primary btn-sm" style="margin-top: 10px;">Create New Post</button>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="widget-title" style="margin-top: 10px;">--}}
{{--                        <div class="right-side-title">LAYOUT</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content" style="padding-bottom: 15px;">--}}
{{--                        <div class="btn-group pull-left" id="switch-view">--}}
{{--                            <button class="btn btn-primary active" id="post-home-layout-1">--}}
{{--                                <span class="fa fa-th-list"></span>--}}
{{--                            </button>--}}
{{--                            <button class="btn btn-primary" id="post-home-layout-2">--}}
{{--                                <span class="fa fa-th-large"></span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="widget-title" style="margin-top: 10px;">--}}
{{--                        <div class="right-side-title">CLOUD LABELS</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content" style="padding-bottom: 15px;">--}}
{{--                        <a href="{{ route('index') }}"><span class="badge badge-default">All</span></a>--}}
{{--                        <span class="badge badge-default">Tech</span>--}}
{{--                        <span class="badge badge-primary">Video</span>--}}
{{--                        <span class="badge badge-secondary">Foods</span>--}}
{{--                        <span class="badge badge-success">Labels</span>--}}
{{--                        <span class="badge badge-danger">Blogger</span>--}}
{{--                    </div>--}}

{{--                    <div class="widget-title" style="margin-top: 10px;">--}}
{{--                        <div class="right-side-title">RECENT POSTS</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content">--}}
{{--                        @foreach($archives as $archive)--}}
{{--                            @if($loop->last)--}}
{{--                                <div class="item-thumbnail-only-last">--}}
{{--                                    <div class="item-thumbnail">--}}
{{--                                        <a href="{{ route('post.detail', ['id' => $archive->id]) }}"><img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-title">--}}
{{--                                        <a href="{{ route('post.detail', ['id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @else--}}
{{--                                <div class="item-thumbnail-only">--}}
{{--                                    <div class="item-thumbnail">--}}
{{--                                        <a href="{{ route('post.detail', ['id' => $archive->id]) }}"><img class="item-thumbnail-img" height="72" src="{{ URL::asset('uploads/'.$archive->image) }}"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-title">--}}
{{--                                        <a href="{{ route('post.detail', ['id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </aside>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <a class="dropdown-item" href="{{ route('logout') }}" style="color: yellow;"--}}
{{--           onclick="event.preventDefault();--}}
{{--                                                 document.getElementById('logout-form').submit();">--}}
{{--            Logout--}}
{{--        </a>--}}

{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </main>--}}

{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $("#post-home-layout-1").click(function(){--}}
{{--                $("#post-home-layout-1").addClass("active");--}}
{{--                $("#post-home-layout-2").removeClass("active");--}}
{{--                $(".post-container").addClass("col-xs-12", 500);--}}
{{--                $(".post-container").removeClass("bloc col-xs-4", 500);--}}
{{--            });--}}
{{--            $("#post-home-layout-2").click(function(){--}}
{{--                $("#post-home-layout-2").addClass("active");--}}
{{--                $("#post-home-layout-1").removeClass("active");--}}
{{--                $(".post-container").removeClass("col-xs-12", 500);--}}
{{--                $(".post-container").addClass("bloc col-xs-4", 500);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


    <div class="boxed">

        <div class="container container-gutter">

            @include('partials.header')

            <div class="content">

                <div class="row">

                    <div class="col-md-8 main-content" >

                        <!-- Main (left side) -->
                        <section>

                            @foreach($posts as $post)
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="blog-post">
                                            <div class="blog-post-container">
                                                <a href="{{ route('post.read', ['post_id' => $post->id]) }}"><img style="width: 100%" src="{{ URL::asset('uploads/'.$post->image) }}" alt=""></a>
                                            </div>

                                            <div class="blog-post-body">

                                                <div class="post-meta"><span class="post-category"><a href="#">Fashion</a></span></div>
                                                <div class="divider"></div>
                                                <h2 class="title"><a href="{{ route('post.read', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h2>
                                                <div class="post-meta">Posted on <span class="post-time">{{ date("M d, Y", strtotime($post->created_at)) }}</span> by <span class="post-author"><a href="post.html">{{ $post->name }}</a></span></div>
                                                <p>{!! \Illuminate\Support\Str::words($post->strip_description, 30, '...') !!}</p>
                                                <p>
                                                <div class="more-button"><a href="{{ route('post.read', ['post_id' => $post->id]) }}"><span class="read-more-button">READ MORE</span></a></div>
                                                <div class="wcircle-menu-button">
                                                    <div class="wcircle-icon">
                                                        <div class="wcircle-menu-icon"> <i class="fa fa-share-alt"></i> </div>
                                                    </div>
                                                    <div class="wcircle-menu" style="display:none;">
                                                        <div class="wcircle-menu-item share-facebook"> <a href="post.html"><i class="fa fa-facebook"></i></a> </div>
                                                        <div class="wcircle-menu-item share-youtube"> <a href="post.html"><i class="fa fa-youtube"></i></a> </div>
                                                        <div class="wcircle-menu-item share-twitter"> <a href="post.html"><i class="fa fa-twitter"></i></a> </div>
                                                        <div class="wcircle-menu-item share-google"> <a href="post.html"><i class="fa fa-google"></i></a> </div>
                                                        <div class="wcircle-menu-item share-linkedin"> <a href="post.html"><i class="fa fa-linkedin"></i></a> </div>
                                                        <div class="wcircle-menu-item share-pinterest"> <a href="post.html"><i class="fa fa-pinterest"></i></a> </div>
                                                        <div class="wcircle-menu-item share-tumblr"> <a href="post.html"><i class="fa fa-tumblr"></i></a> </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </section>
                        @if(count($posts) > 0)
                            <nav>
                                {{ $posts->links() }}
                            </nav>
                        @else
                            <p style="line-height: 150px; text-align: center;color: #636E88;font-size: 20px;font-style: italic;">No Post To Display</p>
                        @endif
                    </div>

                    <div class="col-md-4">

                        <!-- SIDE BAR -->
                        <div id="sidebar">

                            <!-- sidebar-module-author -->
                            <div class="sidebar-module">

                                <div class="sidebar-content">

                                    <h4 class="sidebar-heading"><span>About Us</span></h4>

                                    <a href="post.html"><img src="images/about-me.jpg" alt="fashion" /></a>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                                    <a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a>
                                </div>
                            </div>
                            <!-- end sidebar-module-author -->

                            <!-- sidebar-module latest posts -->
                            <div class="sidebar-module">

                                <div class="sidebar-content">

                                    <h4 class="sidebar-heading"><span>Latest</span></h4>

                                    @foreach($archives as $archive)
                                        <div class="widget-post" id="latest_posts">
                                            <div class="widget-post-circle">
                                                {{ $loop->iteration }}
                                            </div>
                                            <div class="widget-post-entry">
                                                <h3 class="widget-post-title"><a href="{{ route('post.read', ['post_id' => $archive->id]) }}">{{ $archive->title }}</a></h3>
                                                <div class="widget-post-meta"><i class="fa fa-clock-o"></i>{{ date("d. M Y", strtotime($archive->created_at)) }}<span class="widget-post-comments"><i class="fa fa-comments"></i>15</span></div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- end sidebar-module -->

                            <!-- sidebar-module -->
                            <div class="sidebar-module">
                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Social</span></h4>
                                    <div class="widget-social">
                                        <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        <a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                        <a href="http://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-module -->

                            <!-- sidebar-module -->
                            <div class="sidebar-module">

                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Fashion</span></h4>
                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="images/demo/300x300-1.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>11</span></div>
                                        </div>
                                    </div>

                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="images/demo/300x300-5.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>6</span></div>
                                        </div>
                                    </div>

                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="images/demo/300x300-7.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">Coors Light Gets New Look, Miller Lite Targets Biculturals</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
                                        </div>
                                    </div>

                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="images/demo/300x300-6.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">Facebook to Start Telling Brands Who's Talking About What Topics</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>14</span></div>
                                        </div>
                                    </div>

                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="images/demo/300x300-3.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">Notegraphy, Graphic Design Meet Note-Taking</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end sidebar-module -->

                            <!-- sidebar-module latest comments -->
                            <div class="sidebar-module">

                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Latest Comments</span></h4>
                                    <div class="lcomments-item">
                                        <a href="#">Mr. Wordpress</a> on <a href="post.html">Monotype Typecast, Stately Type and TDC Generator</a>
                                    </div>
                                    <div class="lcomments-item">
                                        <a href="#">Jeremy Clarkson</a> on <a href="post.html">Five centuries, but also the nation</a>
                                    </div>
                                    <div class="lcomments-item">
                                        <a href="#">John Doe</a> on <a href="post.html">12 Animated Magnets from Fictional Places</a>
                                    </div>
                                    <div class="lcomments-item">
                                        <a href="#">Claire</a> on <a href="post.html">Wonderful Pencil Drawings by Stefan</a>
                                    </div>
                                    <div class="lcomments-item">
                                        <a href="#">Sarah Lee</a> on <a href="post.html">Five centuries, but also the nation</a>
                                    </div>
                                </div>

                            </div>
                            <!-- end sidebar-module latest comments -->

                            <!-- sidebar-module-tag-cloud -->
                            <div class="sidebar-module">

                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Tag cloud</span></h4>
                                    <div class="tag-cloud">
                                        @foreach($tags as $tag)
                                            <a href="{{ Url::to('/tag/' . $tag->tagId) }}">{{ $tag->tagName }}</a>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <!-- end sidebar-module-tag-cloud -->

                            <!-- end SIDE BAR -->
                        </div>
                    </div>

                </div><!-- end row -->

            </div><!-- end content -->


            <p id="back-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </p>

        </div> <!-- container div -->

    </div> <!-- boxed div -->
@endsection