<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/summernote.min.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.3.4.min.js') }}"></script>
    <script src="{{ URL::to('js/tether.min.js') }}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ URL::to('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/ie10-viewport-bug-workaround.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/summernote.js') }}"></script>
    
    <style>
        body {
            font-family: 'Roboto',sans-serif;
            background: #f0f0f0;
        }
        .container {
        }
        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }
        .affix + .container-fluid {
            padding-top: 70px;
        }
        .post-container {
            display: flex;
            padding: 20px;
        }
        .post-title {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            color: #555;
            font-size: 18px;
            font-weight: 700;
            line-height: normal;
        }
        .post-date {
            color: #999;
            line-height: 1.6em;
            font-size: 11px;
            margin: 5px 0;
        }
        .post-body-dot {
            color: #999;
            font-size: 85%;
            line-height: 1.6;
            margin: 0 0 8px 0;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .posts-thumb {
            width: 180px;
            height: 160px;
        }
        .post-info {
            padding-left: 10px;
        }
        .post-bottom-line {
            border-bottom: 1px dotted rgba(0,0,0,0.16);
        }
        .post-list-read-more {
            border: 1px solid rgba(0,0,0,0.06);
            padding: 5px 8px;
            line-height: normal;
            float: left;
            font-size: 11px;
            color: #999;
        }
        .post-list-read-more:hover {
            background: #ccc;
            color: #fff;
        }
        .widget-title {
            background: #fff;
            position: relative;
            text-transform: uppercase;
        }
        .right-side-title {
            position: relative;
            font-size: 13px;
            padding: 15px 20px;
            margin: 0;
            border-bottom: 1px solid rgba(0,0,0,0.06);
            font-weight: 700;
            line-height: normal;
        }
        .widget-content {
            background: #fff;
            margin: 0;
            padding: 12px 20px;
            overflow: hidden;
            padding-bottom: 5px;
        }
        .item-thumbnail-only {
            display: flex;
            padding: .7em 0!important;
            border: 0;
            position: relative;
            border-bottom: 1px dotted rgba(0,0,0,0.2);
        }
        .item-thumbnail-only-last {
            display: flex;
            padding: .7em 0!important;
            border: 0;
            position: relative;
        }
        .item-title {
            color: #555;
            font-size: 12px;
            margin-left: 10px;
        }
        .post-date-border {
            background: #fafafa;
            display: block;
            padding: 10px;
            color: #999;
            font-size: 12px;
            overflow: hidden;
            margin: 20px 0;
            border: 1px solid #f0f0f0;
        }
        .post-desc {
            margin-top: 20px;
        }
        .post-img {
            width: 100%;
            height: auto;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #e64c3c;
            border-color: transparent;
        }
        textarea {
    		display: block;
    		margin-left: auto;
    		margin-right: auto;
        }
        .modal {
            padding-top: 150px;
        }
        .modal-title {
            display: none;
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @yield('scripts')
</body>
</html>
