@extends('frontend.layouts.master')

@section('title', '註冊帳號::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Home Start -->
<div class="content">
    <div class="register">
        <div>帳號：<input type="text"></div>
        <div>密碼：<input type="text"></div>
        <div>生日：<input type="text"></div>
        <div>信箱：<input type="text"></div>
        <div>地址：<input type="text"></div>
        <div><button type="submit">加入會員</button></div>
    </div>
</div>
<!-- Home End -->
@endsection