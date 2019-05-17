<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
    <style>
        body {
            font-family: 'Times';
            background: #eaf2ff;
        }
        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }
        .affix + .container-fluid {
            padding-top: 70px;
        }
        .posts-thumb {
            width: 95%;
            height: auto;
        }
        .entry-thumb {
            max-width: 100%;
            height: auto;
            opacity: 0.5;
        }
        .post-container {
            position: relative;
        }
        .text-block {
            position: absolute;
            color: red;
            width: 100%;
            height: auto;
            text-align: center;
            bottom: 10px;
        }
        .posts-1 {
            position: absolute;
            width: 85%;
            left: 5%;
            height: auto;
            bottom: -10px;
            background: #eaf2ff;
            padding: 10px;
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('partials.header')
    @yield('content')
    <div id="footer" style="width: 100%; height: 300px; background: #fafafa; margin-top: 150px;">
    </div>

    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    @yield('scripts')
</body>
</html>