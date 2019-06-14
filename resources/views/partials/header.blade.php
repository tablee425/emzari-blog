{{--<nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0" data-spy="affix" data-offset-top="-10" style="padding-left: 100px; padding-right: 100px;box-shadow: 1px 0 2px 2px rgba(42,42,42,.25);">--}}
{{--    <a class="navbar-nav navbar-brand" style="color: #555;font-size: 18px;font-weight: 700;line-height: normal;" href="{{ URL::to('/home') }}">My Posts</a>--}}
{{--    <div class="navbar-nav ml-auto" id="navbarsExample09">--}}
{{--        <ul class="navbar-nav ml-auto">--}}
{{--            <li class="nav-item dropdown">--}}

{{--                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"--}}
{{--                aria-haspopup="true" aria-expanded="false" style="color: #555;font-size: 18px;font-weight: 700;line-height: normal;">@guest User Account @else {{ Auth::user()->name }} @endguest</a>--}}
{{--                <div class="dropdown-menu" aria-labelledby="dropdown09">--}}
{{--                    @guest--}}
{{--                    <a class="dropdown-item" style="color: #555;font-size: 18px;font-weight: 700;line-height: normal;" href="{{ route('register') }}">Sign up</a>--}}
{{--                    <a class="dropdown-item" style="color: #555;font-size: 18px;font-weight: 700;line-height: normal;" href="{{ route('login') }}">Sign in</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('logout') }}"--}}
{{--                        onclick="event.preventDefault();--}}
{{--                                                    document.getElementById('logout-form').submit();">--}}
{{--                            Logout--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
{{--                    @endguest--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}
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
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/home') }}">My Post</a></li>
                @guest
                @else
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" style="color: green!important;">Create New <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('post.getform', ['id' => 1]) }}">Swift</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 2]) }}">Java</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 3]) }}">PHP</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 4]) }}">JavaScript</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 5]) }}">C#</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 6]) }}">C/CPP</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 7]) }}">Python</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 8]) }}">Ruby</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 9]) }}">Objective-C</a></li>
                            <li><a href="{{ route('post.getform', ['id' => 10]) }}">SQL</a></li>
                        </ul>
                    </li>
                @endguest
                <li class="dropdown">
                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Layout <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('index') }}">List</a></li>
                        <li><a href="{{ route('index.grid') }}">Grid</a></li>
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
                @guest
                @else
                    <li><a href="about.html">About</a></li>
                @endguest
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- end main menu -->
