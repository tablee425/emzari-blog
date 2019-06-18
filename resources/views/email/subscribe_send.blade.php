<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            Hi
        </div>
        <br>
        <div>
            Thanks for subscribing to the Emzari News email list. To complete your subscription, you need to confirm you got this email. To do so, please click the link below:
        </div>
        <br>
        <div>
            ------------------------------
        </div>
        <br>
        <a href="{{env('APP_URL')}}/subscribe/{{$token}}">{{env('APP_URL')}}/subscribe/{{ $token }}</a>
        <br>
        <br>
        <div>
            ------------------------------
        </div>
        <br>
        <div>
            If you subscribed in error or no longer want to hear from us, click the link below and you will be instantly removed from our list:
        </div>
        <br>
        <div>
            ------------------------------
        </div>
        <br>
        <a href="{{env('APP_URL')}}/unsubscribe/{{$token}}">{{env('APP_URL')}}/unsubscribe/{{ $token }}</a>
    </body>
</html>