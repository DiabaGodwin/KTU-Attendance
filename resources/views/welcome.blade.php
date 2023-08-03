<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
                    <div class="welcome-message">
                        <h2>SCAN & ENTER</h2>
                        <h3>Tired of typing usernames and passwords? Embrace the future of login with our all-new QR Code system! Simply scan the code, get verified, and you’re in!</h3>
                    </div>
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
