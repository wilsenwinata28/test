<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{{ URL::asset('css/app.css')}}}" />

    <title>Bebas Akutansi - @yield('title')</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{route("login.form")}}">Login</a></li>
                        <li><a href="{{route("register.form")}}">Register</a></li>
                    @else
                        <li>
                            <a href="{{route('logout')}}">
                                Logout
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
</body>


@yield('footer')
</html>
