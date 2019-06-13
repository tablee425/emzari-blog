{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card" style="background: #17a2b8;">--}}
{{--                <div class="card-header" style="color: white;">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" style="color: #17a2b8;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" style="color: #17a2b8;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember" style="color: white;">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary" style="background: white;">--}}
{{--                                    <div style="color: #17a2b8;">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </div>--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

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
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
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
                            <li><a href="{{ route('register') }}">REGISTER</a></li>
                            <li><a href="{{ route('login') }}">LOGIN</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <!-- end main menu -->

            <div class="content">
                <div class="comment-form-body">
                    <form class="comment-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label for="email" style="display: contents;">Email</label>
                            <input id="email" type="text" required class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="password" style="display: contents;">Password</label>
                            <input id="password" type="password" style="width: 100%;" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12" style="margin-top: 20px;">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="display: contents;">
                                REMEMBER ME
                            </label>
                        </div>

                        <div class="col-md-12 row" style="margin-top: 20px; display: grid;">
                            <input type="submit" value="Login" class="submit-button" />
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #1d68a7;">Forgot Your Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

