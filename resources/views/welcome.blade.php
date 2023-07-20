<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}

    <!-- Styles -->
    </head>
    <body>
        <div class="landing">
            <div class="landing-content">
                <div class="left">
                    <div class="">
                        <img class="left-img" src="{{ asset('images/landing-bg.jpg')}}" alt="">
                    </div>
                </div>
                <div class="right">
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                <div class="sign-in">
                                    <div class="login">
                                      <a href="{{ route('login') }}" class="login-btn">Login</a>
                                    </div>
                            @if (Route::has('register'))
                                    <div class="sign-up ">
                                        <a href="{{ route('register') }}" class="register-btn">Register</a>
                                    </div>
                            @endif
                                </div>
                            @endauth
                    @endif
                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
