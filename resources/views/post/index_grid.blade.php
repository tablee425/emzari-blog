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

                    <div class="col-md-8 main-content" >

                        <!-- Main (left side) -->
                        <section>
                            <div class="row">
                                <?php
                                    $rowCount = 0;
                                ?>
                                @foreach($posts as $post)
                                    <div class="col-md-4">
                                        <div class="grid-post">
                                            <div class="grid-post-container">
                                                <img src="images/demo/1200x800-10.jpg" alt="">
                                                <div class="post-cats"><a href="#" class="color2">{{ $post->title }}</a></div>
                                            </div>

                                            <div class="post-meta">
                                                <span class="post-meta-publ-date">February 23, 2015</span>
                                                <span><i class="fa fa-comments"></i> <a href="#" rel="category tag">32</a></span>
                                            </div>

                                            <div class="grid-post-body">
                                                <h3 class="title"><a href="portfolio-item.html">Notegraphy, Graphic Design Meet Note-Taking</a></h3>
                                                <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                                                <p><a href="post.html" class="more-button"><span class="read-more-button">READ MORE</span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $rowCount++;
                                        if ($rowCount % 3 == 0) {
                                            echo '</div><div class="row">';
                                        }
                                    ?>
                                @endforeach
                            </div>
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

