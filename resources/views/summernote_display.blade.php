<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Summernote Laravel Tutorial</title>

        <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('starter-template.css')}}" rel="stylesheet">
    </head>

    <style>
        textarea {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <body>
        <div class="container">
            <div class="starter-template">
                <h1>Display summernote content from DB</h1>
            </div>
    	{!! $summernote->content !!}
        </div>
        <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('js/tether.min.js') }}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::to('js/ie10-viewport-bug-workaround.js') }}"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::to('js/summernote.js') }}"></script>
        <script>
            $(document).ready(function() {
              $('.summernote').summernote();
            });
        </script>
    </body>
</html>

