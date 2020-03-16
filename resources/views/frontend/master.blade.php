<!DOCTYPE html>
<html lang="zh_TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>petweb</title>
    <link rel="stylesheet" href="{{ URL::asset('css/frontend.css') }}">
</head>
<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.user_menu')
    @include('frontend.layouts.nav')
    @include('frontend.layouts.footer')
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
</body>
</html>