@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="boxed">

        <div class="container container-gutter">

            @include('partials.header')

            <div class="content">

                <div class="row">

                    <div class="col-md-8 main-content">

                        <!-- Main (left side) -->

                        <section>

                            <div class="row">
                                <div class="col-md-12">

                                    <!-- post -->
                                    <article class="blog-post">
                                        <div class="blog-post-container">
                                            <img src="images/demo/1200x800-17.jpg" alt="">
                                        </div>

                                        <div class="post-entry">

                                            <div class="post-meta"><span class="post-category"><a href="#">{{ $tag->tagName }}</a></span></div>
                                            <div class="divider"></div>
                                            <h1><a href="portfolio-item.html">{{ $post->title }}</a></h1>
                                            <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
                                            <div class="post-desc">{!! $summernote->content !!}</div>

                                        </div>
                                    </article>
                                    <!-- post end -->

                                    <!-- author -->
                                    <section>
                                        <h4 class="main-heading"><span>Author</span></h4>

                                        <div class="author">
                                            <div class="author-image">
                                                <img src="images/demo/300x300-4.jpg" alt="">
                                            </div>
                                            <div class="author-text-body">
                                                <h3><a href="index-list.html">Different Themes</a> <span>Editor in chief</span></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci accusamus accusantium. Adipisci accusamus accusantium. Adipisci accusamus accusantium.</p>
                                                <div class="author-social">
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

                                    </section>

                                    <!--== Comments ==-->
                                    <h4 class="main-heading"><span>Comments</span></h4>
                                    <div class="comments">
                                        <ul class="comment-list">
                                            @foreach($comments as $comment)
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="/images/demo/avatar.png" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">{{ $comment->name }}</a>
                                                        <span class="comment-meta">{{ date("F d, Y", strtotime($comment->created_at)) }} AT {{ date("G:i:s A", strtotime($comment->created_at)) }}</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>{{ $comment->comment }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <!--== Post Reply ==-->
                                    <h4 class="main-heading"><span>Post Reply</span></h4>

                                    <div class="comment-form-body">
                                        <div class="row">
                                            <form class="comment-form" action="{{ route('post.comment', ['post_id' => $post_id]) }}" method="post">
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="comment">Comment</label>
                                                    <textarea name="comment" id="comment" cols="35" rows="10"></textarea>
                                                </div>
                                                @guest
                                                    <div class="col-md-12"><input type="submit" value="Login To Post Comment" class="submit-button" /></div>
                                                @else
                                                    <div class="col-md-12"><input type="submit" value="Post Comment" class="submit-button" /></div>
                                                @endguest
                                            </form>
                                        </div>
                                    </div>

                                </div><!-- end col-md-12 -->
                            </div><!-- end row -->

                        </section>
                        <!-- END Main (left side) -->

                    </div>

                    <div class="col-md-4">

                        <!-- SIDE BAR -->
                        <div id="sidebar">
                            <!-- sidebar-module-author -->
                            <div class="sidebar-module">


                                <div class="sidebar-content">

                                    <h4 class="sidebar-heading"><span>About Us</span></h4>

                                    <a href="post.html"><img src="/images/about-me.jpg" alt="fashion" /></a>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                                    <a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a>
                                </div>
                            </div>
                            <!-- end sidebar-module-author -->

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
                                    <h4 class="sidebar-heading"><span>{{ $tag->tagName }}</span></h4>
                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="/images/demo/300x300-1.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">Watch Top Brands and Agencies Live-Tweet</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i>15. MARCH 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>11</span></div>
                                        </div>
                                    </div>

                                    <div class="widget-post">
                                        <div class="widget-post-image">
                                            <a href="post.html"><img src="/images/demo/300x300-5.jpg" alt="fashion" /></a>
                                        </div>
                                        <div class="widget-post-entry">
                                            <h3 class="widget-post-title"><a href="post.html">The Influences of Modern Minimalism</a></h3>
                                            <div class="widget-post-meta"><i class="fa fa-clock-o"></i> 15. JANUARY 2015 <span class="widget-post-comments"><i class="fa fa-comments"></i>6</span></div>
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

    {{--    <main role="main" class="container"  style="margin-top: 70px">--}}
{{--        <section style="margin-top: 10px;">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-7 offset-sm-1" style="background: white; padding: 20px;">--}}
{{--                    <div class="blog-post">--}}
{{--                        <h2 class="post-title">{{ $post->title }}</h2>--}}
{{--                        <p class="post-date-border"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>--}}
{{--                        <div class="post-desc">{!! $summernote->content !!}</div>--}}
{{--                    </div>--}}

{{--                    <form class="text-center border border-light p-5 m-5" action="{{route('post.send_subscription')}}" method="POST">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        <p class="h4 mb-4">SUBSCRIBE TO OUR NEWSLETTER</p>--}}
{{--                        <input name="subscribe_name" type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name" required>--}}
{{--                        <input name="subscribe_email" type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail" required>--}}
{{--                        <button class="btn btn-info btn-block" type="submit">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--                <aside class="col-sm-3" style="margin-left: 10px; padding-left: 0px; padding-right: 0px;">--}}
{{--                    <div class="widget-title">--}}
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
{{--                                        <img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="item-title">--}}
{{--                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @else--}}
{{--                                <div class="item-thumbnail-only">--}}
{{--                                    <div class="item-thumbnail">--}}
{{--                                        <img class="item-thumbnail-img" src="{{ URL::asset('uploads/'.$archive->image) }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="item-title">--}}
{{--                                        <a href="{{ route('post.read', ['post_id' => $archive->id]) }}" title="Youtube Responsive Video">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </aside>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </main>--}}
@endsection