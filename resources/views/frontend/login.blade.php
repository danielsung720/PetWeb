@extends('frontend.layouts.master')

@section('title', '註冊帳號::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <form method="POST" action="login">
    {!! csrf_field() !!}
        <div class="login">
            <div><h3>登入您的帳號</h3></div>
            <div>信　　箱：<input type="email" name="email" placeholder="請輸入信箱"></div>
            <div>密　　碼：<input type="password" name="password" placeholder="請輸入密碼"></div>
            <div>
                <button type="submit">登入</button>
                <a href="{{ route('register') }}">加入會員</a>
            </div>
        </div>
    </form>
</div>
<!-- Content End -->
@endsection