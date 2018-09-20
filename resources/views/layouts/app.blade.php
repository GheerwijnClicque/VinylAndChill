<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vinyl &amp Chill - @yield('title')</title>

        <!-- Styles -->
        <link href="./css/app.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="nav">
            <a href="/">home</a>
            <a href="/about">about</a>
            <a href="/contact">contact</a>
            @can('isAdmin')
                <a href="/admin">secret admin panel</a>
            @endcan
        </div>

        <div class="login">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="/">Home</a>
                        <a href="/logout">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                @yield('content')

            </div>
        </div>
    </body>
    <script src="./js/app.js"></script>
</html>
