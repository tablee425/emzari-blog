@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div style="height: calc(100vh - 50px - 315px + 40px - 63px);margin-top: 63px;" class="d-flex justify-content-center align-items-center">
        <div class="col-9 flex-column">
            <div class="col-6 flex-column">
                <div style="font-size: 50px; font-weight: bold; color: #f4645f;">
                    Thank You
                </div>
                <div style="font-size: 25px; color: gray;margin-top: 10px;">
                    Your subscription has been already subscribed.
                </div>
            </div>
        </div>
    </div>
@endsection