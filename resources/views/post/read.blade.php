@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="boxed">

        <div class="container container-gutter">

            <!-- top menu -->
            <div class="top-bar">

                <span class="top-bar-menu">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="advertisement.html">Advertisement</a>
                    <a href="contact.html">Contact</a>
                </span>

                <span class="top-bar-socials">
                    <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                    <a href="http://plus.google.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="http://tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                </span>

            </div>
            <!-- end top menu -->

            <!-- header (logo section) -->
            <header class="header">

                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"><a href="index.html"><img id="logo" src="{{ URL::asset('images/logo.png') }}" alt="logo"></a></div>
                    </div>
                </div>

            </header>
            <!-- end header (logo section) -->

            <!-- main menu -->
            <nav class="navbar yamm navbar-default" id="main-navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.html">Default</a></li>
                                    <li><a href="index-blog.html">Blog Layout</a></li>
                                    <li><a href="index-grid.html">Grid Layout</a></li>
                                    <li><a href="index-list.html">List Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="index-grid.html">Fashion</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="post-video.html">Post with Video</a></li>
                                    <li><a href="about.html">Full Width Page</a></li>
                                    <li><a href="contact.html">Contact Form</a></li>
                                </ul>
                            </li>

                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
                                <div class="dropdown-menu searchbox" role="menu">
                                    <form id="search" class="navbar-form search" role="search">
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Type to search">
                                            <span class="input-group-btn"><button type="submit" class="btn btn-default btn-submit"><i class="fa fa-angle-right"></i></button></span>
                                        </div>
                                    </form>
                                </div>
                            </li><!-- /.searchbox -->
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <!-- end main menu -->

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

                                            <div class="post-meta"><span class="post-category"><a href="#">Fashion</a></span></div>
                                            <div class="divider"></div>
                                            <h1><a href="portfolio-item.html">{{ $post->title }}</a></h1>
                                            <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>
                                            <div>{!! $summernote->content !!}</div>

                                            <div class="tag-cloud">
                                                <a href="#">Fashion</a>
                                                <a href="#">Design</a>
                                                <a href="#">Architecture</a>
                                                <a href="#">Gadgets</a>
                                                <a href="#">Cars</a>
                                                <a href="#">Computers</a>
                                            </div>

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
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="images/demo/avatar.png" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">James</a>
                                                        <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Proin quis ligula pulvinar, commodo enim eget, lacinia dolor. Nulla lacinia viverra nulla a interdum.</p>
                                                        <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="comment">
                                                            <div class="comment-author">
                                                                <img src="images/demo/avatar.png" alt="Author">
                                                                <a href="#" rel="external nofollow" class="comment-author-name">Amanda</a>
                                                                <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                            </div>
                                                            <div class="comment-body">
                                                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
                                                                <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment">
                                                            <div class="comment-author">
                                                                <img src="images/demo/avatar.png" alt="Author">
                                                                <a href="#" rel="external nofollow" class="comment-author-name">Sarah</a>
                                                                <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                            </div>
                                                            <div class="comment-body">
                                                                <p>Nulla fringilla massa a eros varius laoreet. Cras leo odio, ultrices et aliquam quis, convallis eu turpis.</p>
                                                                <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="images/demo/avatar.png" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">Amanda</a>
                                                        <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Pellentesque suscipit cursus nibh. Aenean est ipsum, varius ac vulputate sed, auctor sed est. Morbi sed vulputate nulla. Praesent luctus felis augue, et porta massa luctus vitae. Ut eleifend ornare purus, non gravida elit ultrices vel.</p>
                                                        <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img src="images/demo/avatar.png" alt="Author">
                                                        <a href="#" rel="external nofollow" class="comment-author-name">Casper</a>
                                                        <span class="comment-meta">March 17, 2015 at 18:45 AM</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Cras leo odio, ultrices et aliquam quis, convallis eu turpis. Proin nec nisl eget tellus tempus maximus.</p>
                                                        <a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!--== Post Reply ==-->
                                    <h4 class="main-heading"><span>Post Reply</span></h4>

                                    <div class="comment-form-body">
                                        <div class="row">
                                            <form class="comment-form" action="http://example.org/">
                                                <div class="col-md-6">

                                                    <label for="author">Your name</label>
                                                    <input id="author" type="text" placeholder="Your name" name="author">

                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="text" placeholder="Email" name="author">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="email">Subject</label>
                                                    <input id="email" type="text" placeholder="Subject" name="subject">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="comment">Comment</label>
                                                    <textarea name="comment" id="comment" cols="35" rows="5"></textarea>
                                                </div>

                                                <div class="col-md-12"><input type="submit" value="Post Comment" class="submit-button" /></div>
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

                                    <a href="post.html"><img src="images/about-me.jpg" alt="fashion" /></a>
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
                                        <a href="#">Fashion</a>
                                        <a href="#">Design</a>
                                        <a href="#">Architecture</a>
                                        <a href="#">Gadgets</a>
                                        <a href="#">Cars</a>
                                        <a href="#">Music</a>
                                        <a href="#">Recipe</a>
                                        <a href="#">Lifestyle</a>
                                        <a href="#">Travel</a>
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

    <footer class="footer">

        <div class="footer-dark">
            <div class="footer-socials">
                <a href="https://www.twitter.com/d" class="social"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="http://www.bloglovin.com//d" class="social"><i class="fa fa-plus"></i> Bloglovin</a>
                <a href="https://www.facebook.com/d" class="social"><i class="fa fa-facebook-square"></i> Facebook</a>
                <a href="https://dribbble.com/d" class="social dribbble" rel="publisher"><i class="fa fa-dribbble"></i> Dribbble</a>
                <a href="https://plus.google.com/+d" class="social google"><i class="fa fa-google-plus-square"></i> Google+</a>
            </div>

            <div class="footer-menu">
                <a href="#" class="social">About Us</a>
                <a href="#" class="social">Archives</a>
                <a href="#" class="social">Advertise</a>
                <a href="#" class="social">Contact Us</a>
            </div>
        </div>

        <div class="footer-bottom">
            <i class="fa fa-copyright"></i> Copyright 2015. All rights reserved.<br />
            Theme made by <a href="http://themeforest.net/user/different-themes/portfolio?ref=different-themes">Different Themes</a>
        </div>

    </footer>

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