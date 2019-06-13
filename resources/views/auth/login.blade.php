{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card" style="background: #17a2b8;">--}}
{{--                <div class="card-header" style="color: white;">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" style="color: #17a2b8;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

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
{{--                                <input id="password" type="password" style="color: #17a2b8;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember" style="color: white;">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary" style="background: white;">--}}
{{--                                    <div style="color: #17a2b8;">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </div>--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
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
                    <form class="comment-form" action="{{ route('login') }}" method="POST">
                        @csrf
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
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="display: contents;">
                                REMEMBER ME
                            </label>
                        </div>

                        <div class="col-md-12 row" style="margin-top: 20px; display: grid;">
                            <input type="submit" value="Login" class="submit-button" />
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #1d68a7;">Forgot Your Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

