<!DOCTYPE html>
<html lang="en">
<head>
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>@yield('title')</title>--}}

{{--    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ URL::to('css/summernote.min.css') }}">--}}

{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">--}}

{{--    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>--}}
{{--    <script src="{{ URL::to('js/bootstrap.3.4.min.js') }}"></script>--}}
{{--    <script src="{{ URL::to('js/tether.min.js') }}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>--}}
{{--    <script src="{{ URL::to('dist/js/bootstrap.min.js') }}"></script>--}}
{{--    <script src="{{ URL::to('js/ie10-viewport-bug-workaround.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ URL::to('js/summernote.js') }}"></script>--}}

{{--    <link rel="stylesheet" href="{{ URL::to('css/customweb.css') }}">--}}

{{--    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-tagsinput.css') }}">--}}
{{--    <script src="{{ URL::to('js/bootstrap-tagsinput.js') }}"></script>--}}

{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'Roboto',sans-serif;--}}
{{--            background: #cde;--}}
{{--        }--}}
{{--    </style>--}}
{{--    @yield('styles')--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Firenze - Responsive Blog HTML5 Template</title>

    <link href="{{ URL::to('css/new/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/new/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/new/shortcodes.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/new/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/new/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/new/owl.theme.css') }}" rel="stylesheet">

    <!-- only for demo -->
    <link href="{{ URL::to('css/new/demo-settings.css') }}" rel="stylesheet">
</head>
<body id="top">
{{--    @include('partials.header')--}}
    @yield('content')
    @yield('scripts')
<script type="text/javascript" src="{{ URL::to('js/new/jquery-latest.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/demo-settings.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/SmoothScroll.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/jquery.scrolline.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/jquery.WCircleMenu-min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/new/ThemeScripts.js') }}"></script>
</body>
</html>
