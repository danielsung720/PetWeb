<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/frontend.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">
</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.user_menu')
    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('js/slickset.js') }}"></script>
</body>
</html>