@extends('layouts.auth')

@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-5">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(Session::has('errors'))
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
                <form method="POST" class="form-signin bg-white p-5" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <style>
                            .bg-white {
    color: #fff;
    background-color: #ed1c24 !important;
    width: 73%;
    margin: auto;
}
.p-5 {
    padding: 2rem !important;
}

.btn-primary {
    color: #ed1c24;
    background-color: #ffffff;
    border-color: #3490dc;
}
.text-right {
    text-align: center !important;
}
.btn-link {
    font-weight: 400;
    color: #ffffff;
    text-decoration: none;
}
                        </style>
                         <a href="{{ url('/') }}">
                            <img src="http://beta.fm786.com/logo.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">{{ _lang('Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ _lang('Email') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="password">{{ _lang('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="{{ _lang('Password') }}" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">{{ _lang('Remember Me') }}</label>
                        </div>
                    </div>
                    <div class="row form-group text-right">
                        <div class="col-md-12">
                            <input type="submit" value="{{ _lang('Login') }}" class="btn btn-primary pill px-4 py-2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ _lang('Forgot Password?') }}
                            </a>
                        </div>
                    </div>
                </form>
                @if(Route::has('register'))
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        {{ _lang('Dont have an account?') }}
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ _lang('Sign up') }}
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
