@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')

    <div class="boxed">

        <div class="container container-gutter">

            @include('partials.header')

            <div class="content">
                <div class="comment-form-body">
                    <form class="comment-form" action="{{ route('post.send_subscription') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label for="subscribe_name" style="display: contents;">Name</label>
                            <input id="name" type="text" required name="subscribe_name" autofocus>
                        </div>

                        <div class="col-md-12">
                            <label for="subscribe_email" style="display: contents;">Email</label>
                            <input id="email" type="text" required name="subscribe_email">
                        </div>

                        <div class="col-md-12 row" style="margin-top: 20px; display: grid;">
                            <input type="submit" value="Subscribe" class="submit-button" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

