<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Memings</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-light">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome To Memings <br>
                    <p class="h2">-"Where life has a Meming"</p>
                </div>

                <div class="links">
                    {{-- Woop Woop Lazy Programing --}}
                    <br><br><br>
                    <a href="/subreddits">Subreddits!</a>
                </div>
            </div>
        </div>
    </body>
</html>
