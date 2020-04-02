<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
<ul class="nav">
    @if(Auth::check())
        <li><a class="" href="{{ route('auth.signout') }}">Выйти</a></li>
        <li><a>Вы вошли как: {{ Auth::user()->username }}</a></li>
        <li><a class="" href="/">Главная</a></li>
    @else
        <li><a class="" href="{{ route('auth.signin') }}">Войти</a></li>
        <li><a class="" href="{{ route('auth.signup') }}">Регистрация</a></li>
        <li><a class="" href="/">Главная</a></li>
    @endif
</ul>
    @include('layouts.dop-info')
    @yield('content')
</body>
</html>
