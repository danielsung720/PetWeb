@extends('frontend.layouts.master')

@section('title', 'PetWeb::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <div class="slick">
        <img src="{{ URL::asset('images/slickCarousel/banner3.png') }}" alt="">
        <img src="{{ URL::asset('images/slickCarousel/banner2.png') }}" alt="">
        <img src="{{ URL::asset('images/slickCarousel/banner1.png') }}" alt="">
        <img src="{{ URL::asset('images/slickCarousel/banner4.png') }}" alt="">
        <img src="{{ URL::asset('images/slickCarousel/banner5.png') }}" alt="">
    </div>
</div>
<!-- Content End -->
@endsection