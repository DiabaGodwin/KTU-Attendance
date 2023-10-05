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
        <div class="img"
             style="
             background-image: url('{{ asset('images/bg-image.jpg')}}');
        "
        >
            <div class="landing-content center">
                <div class="right">
                    <div class="welcome-message title">
                        ATTENDIFY
                    </div>
                    <div class="sub_title">
                        Tired of typing usernames and passwords?<br> Embrace the future of login with our all-new QR Code system! Simply scan the code, get verified, and you’re in!
                    </div>
                    <div class="btns">
                        @if (Route::has('login'))
                            @auth
                                <button>
                                    <a href="{{ url('/home') }}" class="">Home</a>
                                </button>
                            @else
                                  <button>
                                      <a href="{{ route('login') }}" class="login-btn">Login</a>
                                  </button>
                                    @if (Route::has('register'))
                                        <button>
                                            <a href="{{ route('register') }}" class="register-btn">Register</a>
                                        </button>
                                    @endif
                                </div>
                            @endauth
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
