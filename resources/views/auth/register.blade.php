{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card" style="background: #17a2b8;">--}}
{{--                <div class="card-header" style="color: white;">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" style="color: #17a2b8;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" style="color: #17a2b8;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" style="color: #17a2b8;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" style="color: #17a2b8;" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary" style="background: white;">--}}
{{--                                    <div style="color: #17a2b8;">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </div>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


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
                    <form class="comment-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label for="name" style="display: contents;">Name</label>
                            <input id="name" type="text" required class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="email" style="display: contents;">Email</label>
                            <input id="email" type="text" required class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="password" style="display: contents;">Password</label>
                            <input id="password" type="password" style="width: 100%;" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12" style="margin-top: 20px;">
                            <label for="password-confirm" style="display: contents;">Confirm Password</label>
                            <input id="password-confirm" type="password" style="width: 100%;" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="col-md-12" style="margin-top: 20px;"><input type="submit" value="Register" class="submit-button" /></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

