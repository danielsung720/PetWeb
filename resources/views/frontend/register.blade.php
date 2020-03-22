@extends('frontend.layouts.master')

@section('title', '註冊帳號::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <form method="POST" action="register">
    {!! csrf_field() !!}
        <div class="register">
            <div><h3>會員資料填寫</h3></div>
            <div>信　　箱：<input type="email" name="email" placeholder="請輸入信箱"></div>
            <div>密　　碼：<input type="password" name="password" placeholder="請輸入密碼"></div>
            <div>確認密碼：<input type="password" name="password_confirm" placeholder="再次輸入密碼"></div>
            <div>姓　　名：<input type="text" name="name" placeholder="請輸入姓名"></div>
            <div><button type="submit">加入會員</button></div>
        </div>
    </form>
</div>
<!-- Content End -->
@endsection