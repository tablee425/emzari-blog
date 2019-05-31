@extends('layouts.master')

@section('title')
Emzari Blog
@endsection

@section('content')
<div style="height: calc(100vh - 50px - 315px + 40px - 63px);margin-top: 63px;" class="d-flex justify-content-center align-items-center">
    <div class="col-9 flex-column">
        <div class="col-6 flex-column">
            @if(Session::has('status') && Session::get('status') != 'SessionExpiredToken~13683432126848694534')
                <div style="font-size: 50px; font-weight: bold; color: #f4645f;">
                    Thank You, {{ Session::get('status') }}
                </div>
                <div style="font-size: 25px; color: gray;margin-top: 10px;">
                    Your subscription has been confirmed and you've been added to the newsletter.
                </div>
            @else
                <div style="font-size: 50px; font-weight: bold; color: #f4645f;">
                    Sorry
                </div>
                <div style="font-size: 25px; color: gray;margin-top: 10px;">
                    Your subscription has been expired. Please subscribe again.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection