<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Clone') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="welcome">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/profile/1') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <header>
                            <img class="welcome-img" src="images/iconfinder.svg" alt="start wars stomtrooper">
                        <h1>Clone</h1>
                    </header>
                </div>

                <div class="links">
                    <a target="_blank" href="https://paulstandley.com">Paul Standley</a>
                    <a target="_blank" href="https://www.coderlist.io/profile/paulstandley?sc=zpo6XTRcVhJTZMweY8Fkqix3">Codelist</a>
                    <a target="_blank" href="https://codepen.io/pielo2">Codepen</a>
                    <a target="_blank" href="https://github.com/paulstandley/">GitHub</a>
                    <a target="_blank" href="https://www.iconfinder.com/icons/216965/clone_storm_trooper_icon">Iconfinder</a>
                </div>
            </div>
        </div>
    </body>
</html>
