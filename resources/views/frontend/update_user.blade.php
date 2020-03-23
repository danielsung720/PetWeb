@extends('frontend.layouts.master')

@section('title', 'PetWeb::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <form method="POST" action="{{ route('update') }}">
    {!! csrf_field() !!}
        <div class="update-data">
            <div><h3>修改會員資料</h3></div>
            <div>信　　箱：<input type="text" name="email" value="{{ $userData[0]['email'] }}" readonly="value"></div>
            <div>密　　碼：<input type="password" name="password" placeholder="請輸入密碼"></div>
            <div>確認密碼：<input type="password" name="password_confirm" placeholder="再次輸入密碼"></div>
            <div>姓　　名：<input type="text" name="name" placeholder="請輸入姓名" value="{{ $userData[0]['name'] }}"></div>
            <div><button type="submit">修改資料</button></div>
        </div>
    </form>
</div>
<!-- Content End -->
@endsection