<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        div img {
            width: 100%!important;
        }
    </style>
</head>
<!-- Edit the code below this line -->
<body class="bg-light">
<div class="container justify-content-center">
    <div class="card mb-4" style="border-top: 5px solid #ff00bf; margin-top: 30px; width: 60%; left: 20%;">
        <div class="card-body">
            <img src="{{ $message->embed(public_path() . '/uploads/' . $thumbnail) }}" />
            <div class="text-left" style="font-size: 30px; font-weight: bold;margin-top: 20px;">{{ $title }}</div>
            <div class="text-left" style="font-size: 17px; color: slategray; margin-top: 20px;">{{ $shortbody }}</div>
            <hr/>
            <a href={{ $link }}><h5 class="text-center"><strong>Read More...</strong></h5></a>
        </div>
    </div>
</div>

</body>
</html>