{{--@extends('layouts.master')--}}

{{--@section('title')--}}
{{--    Emzari Blog--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <div class="boxed">--}}

{{--        <div class="container container-gutter">--}}

{{--            @include('partials.header')--}}

{{--            <meta charset="utf-8">--}}
{{--            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--            <meta name="description" content="">--}}
{{--            <meta name="author" content="">--}}
{{--            <link rel="icon" href="../../favicon.ico">--}}
{{--            <!-- Bootstrap core CSS -->--}}
{{--            <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}
{{--            <!-- Custom styles for this template -->--}}
{{--            <link href="{{asset('starter-template.css')}}" rel="stylesheet">--}}

{{--            <div class="content">--}}
{{--                <h1>New {{ $tagName }} Post</h1>--}}
{{--                <form action="{{route('post.createform')}}" method="POST">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <input type="text" class="form-control" id="id_title" name="title" required aria-describedby="title" placeholder="Enter title">--}}
{{--                    <br/>--}}
{{--                    <textarea name="summernoteInput" class="summernote"></textarea>--}}
{{--                    <br/>--}}
{{--                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
{{--            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>--}}
{{--            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>--}}
{{--            <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>--}}
{{--            <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>--}}
{{--            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">--}}
{{--            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>--}}
{{--            <script>--}}
{{--                $(document).ready(function() {--}}
{{--                    $('.summernote').summernote({ height: 350 });--}}
{{--                });--}}
{{--            </script>--}}

{{--        </div> <!-- container div -->--}}
{{--    </div> <!-- boxed div -->--}}
{{--    --}}

{{--@endsection--}}

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{ URL::to('css/new/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/style.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/shortcodes.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/owl.theme.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/new/demo-settings.css') }}" rel="stylesheet">

    </head>

    <body id="top">
        <div class="boxed">
            <div class="container container-gutter">

                <!--header start-->
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
                    <div class="container-fluid" style="width: 100%;">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav" style="-webkit-flex-direction: row;">
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                                <li><a href="{{ URL::to('/home') }}">My Post</a></li>
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
                <!--header end-->

                <form action="{{route('post.createform')}}" method="POST">
                    @csrf
                    <input style="height: 0;display: none;" value="{{ $tagId }}" name="tagId" />
                    <input style="height: 0;display: none;" value="{{ $tagName }}" name="tagName" />
                    <label style="margin-top: 20px; color: darkslategrey;text-transform: uppercase;">New &nbsp {{ $tagName }} &nbsp POST</label>
                    <br/>
                    <label style="margin-top: 20px;">Title</label>
                    <input id="title" type="text" required name="title" style="width: 100%;text-transform: none;">
                    <label style="margin-top: 20px;">Description</label>
                    <textarea name="summernoteInput" class="summernote"></textarea>
                    <div style="margin-top: 20px; display: grid; width: 100%;">
                        <input type="submit" value="Create" class="submit-button" />
                    </div>
                </form>

            </div>
        </div>

        <footer class="footer" style="margin-top: 20px;">

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
                <i class="fa fa-copyright"></i> Copyright 2019. All rights reserved.<br />
                Theme made by <a href="{{ Url::to('/') }}">Emzari Chabashvili</a>
            </div>

        </footer>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

        <script>
            $(document).ready(function() {
                $('.summernote').summernote({ height: 500 });
            });
        </script>
    </body>
</html>

