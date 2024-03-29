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
                        <div class="logo"><a href="index.html"><img id="logo" src="images/logo.png" alt="logo"></a></div>
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
                                            <h1><a href="portfolio-item.html">A Letter From An Old Graphic Designer To A Young Graphic Designer</a></h1>
                                            <div class="post-meta">Posted on <span class="post-time">February 23, 2015</span> by <span class="post-author"><a href="post.html">Different Themes</a></span></div>

                                            <p>

                                                Praesent vitae leo et sapien fermentum pretium eu sed velit. Phasellus tincidunt eleifend mauris a pellentesque. Duis at porttitor nisl, vitae vestibulum ex. Quisque commodo turpis libero, in consectetur lectus luctus eget. Nam tincidunt elementum massa vel egestas. Sed hendrerit lacus tincidunt, consectetur mauris eget, varius augue. Duis tincidunt bibendum felis at bibendum. Proin lectus elit, molestie eu faucibus in, convallis vel turpis. Pellentesque sit amet accumsan mi, in volutpat urna. Morbi maximus metus et ligula accumsan, id euismod lectus fringilla. Ut a nisl sed risus convallis viverra.
                                            </p>
                                            <p>
                                                In et nulla quis augue ultrices maximus sit amet nec nulla. Integer vel mauris eu sem ullamcorper rutrum. Etiam efficitur, lacus at posuere suscipit, elit mauris fermentum magna, quis commodo tortor arcu id augue. Fusce semper sed mi in ullamcorper. Aliquam sit amet fermentum neque, gravida eleifend diam. Aliquam eu commodo diam, non tempus massa. Nam vulputate egestas nisi, ac luctus felis cursus fermentum. Nulla ultricies ex lectus, quis porttitor lorem dignissim at. Donec erat nisl, gravida nec arcu ac, rutrum iaculis neque. Aliquam congue vitae elit id ornare. Praesent id hendrerit massa, ut congue arcu. Fusce malesuada euismod scelerisque.
                                            </p>

                                            <blockquote><p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things.</p></blockquote>
                                            <p><cite>Steve Jobs</cite> &#8211; Apple Worldwide Developers&#8217; Conference, 1997</p>

                                            <p>
                                                Cras tempor magna dapibus nulla aliquet scelerisque. Proin lectus justo, pulvinar nec condimentum maximus, bibendum eu urna. Pellentesque suscipit cursus nibh. Aenean est ipsum, varius ac vulputate sed, auctor sed est. Morbi sed vulputate nulla. Praesent luctus felis augue, et porta massa luctus vitae. Ut eleifend ornare purus, non gravida elit ultrices vel.
                                            </p>

                                            <p>
                                                Maecenas lobortis ante leo, ac rhoncus nisl elementum et. Proin quis ligula pulvinar, commodo enim eget, lacinia dolor. Nulla lacinia viverra nulla a interdum. Nulla fringilla massa a eros varius laoreet. Cras leo odio, ultrices et aliquam quis, convallis eu turpis. Proin nec nisl eget tellus tempus maximus. Integer consequat velit at tristique gravida. In varius, turpis id imperdiet vestibulum, erat ante auctor ex, vitae consequat libero risus quis sapien. Pellentesque est mi, dignissim vel condimentum et, semper at elit. Aliquam congue accumsan mi et feugiat. Nullam rhoncus quam eu ligula blandit, a maximus quam varius. Ut in sapien ac nisi ornare iaculis.

                                            </p>

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

                                    <!-- related -->
                                    <section>
                                        <h4 class="main-heading"><span>Related</span></h4>

                                        <div class="row">
                                            <div class="col-md-4">

                                                <div class="related-article">
                                                    <div class="related-article-container">
                                                        <img src="images/demo/600x400-4.jpg" alt="">
                                                    </div>
                                                    <div class="related-article-body">
                                                        <h3 class="title"><a href="portfolio-item.html">Wonderful Pencil Drawings by Stefan Zsaitsits</a></h3>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">

                                                <div class="related-article">
                                                    <div class="related-article-container">
                                                        <img src="images/demo/600x400-2.jpg" alt="">
                                                    </div>
                                                    <div class="related-article-body">
                                                        <h3 class="title"><a href="portfolio-item.html">Lovely Flower Petal Art by Zhi Wei</a></h3>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">

                                                <div class="related-article">
                                                    <div class="related-article-container">
                                                        <img src="images/demo/600x400-3.jpg" alt="">
                                                    </div>
                                                    <div class="related-article-body">
                                                        <h3 class="title"><a href="portfolio-item.html">5 Infographics You Should Definitely Check Out</a></h3>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <!-- end related -->

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

                            <!-- sidebar-module-instagram -->
                            <div class="sidebar-module">
                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Instagram</span></h4>
                                    <ul class="widget-instagram">
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-1.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-2.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-3.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-4.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-5.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/300x300-6.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/article-298x298-3.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/article-298x298-2.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                        <li><a href="#" target="_self"><img src="images/demo/article-298x298-1.jpg"  alt="Instagram Title" title="Instagram Title"/></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end sidebar-module-instagram  -->

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

                            <!-- sidebar-module-banner -->
                            <div class="sidebar-module">


                                <div class="sidebar-content">
                                    <h4 class="sidebar-heading"><span>Advertisement</span></h4>
                                    <div class="sidebar-content banner-widget">
                                        <a href="#"><img src="images/banner-300x250.png" alt="advertisement" width="300" height="250" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end sidebar-module-banner -->

                            <!-- end SIDE BAR -->
                        </div>

                    </div>

                </div><!-- end row -->

            </div><!-- end content -->

            <p id="back-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </p>

            <!-- instagram widget in main page -->
            <h4 class="main-heading"><span>Instagram</span></h4>
            <div class="widget-insta">
                <div id="insta-owl" class="owl-carousel owl-theme">
                    <div class="item"><a href="#"><img src="images/demo/300x300-2.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-1.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-3.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-6.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-4.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-5.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/article-298x298-3.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/300x300-6.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/article-298x298-5.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/article-298x298-3.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/article-298x298-2.jpg" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/demo/article-298x298-1.jpg" alt=""></a></div>
                </div>
            </div>
            <!-- end instagram widget in main page -->

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
{{--                        <div class="right-side-title">ABOUT ME</div>--}}
{{--                    </div>--}}
{{--                    <div class="widget-content" style="padding-bottom: 15px;">--}}
{{--                        <img src="{{ URL::asset('uploads/15589569920.png') }}" style="width: 100%; height: auto;" >--}}
{{--                        <div class="font-weight-bold" style="margin-top: 10px;">{{ Auth::user()->name }}</div>--}}
{{--                        <div class="font-weight-bold" style="margin-top: 10px;">Posted: {{ $count }}</div>--}}

{{--                        <div>--}}
{{--                            <a href="{{ route('post.getform') }}">--}}
{{--                                <button type="button" class="btn btn-primary btn-sm" style="margin-top: 10px;">Create New Post</button>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div style="margin-top: 10px;">--}}
{{--                            <a href="{{ route('post.edit', ['id' => $post->id]) }}">--}}
{{--                                <button type="button" class="btn btn-primary btn-sm">Edit Post</button>--}}
{{--                            </a>--}}

{{--                            <a href="{{ route('post.delete', ['id' => $post->id]) }}">--}}
{{--                                <button type="button" class="btn btn-danger btn-sm">Delete Post</button>--}}
{{--                            </a>--}}
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