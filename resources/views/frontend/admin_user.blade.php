@extends('frontend.layouts.master')

@section('title', 'PetWeb::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <div class="admin-user">
        <div><h3>會員名單管理</h3></div>
        <div class="title">
            <div>No.</div>
            <div>E-mail</div>
            <div>Name</div>
            <div>action</div>
        </div>
        @foreach ($userData as $key => $item)
        <div class="list">
            <div>{{$key + 1}}</div>
            <div>{{$item['email']}}</div>
            <div>{{$item['name']}}</div>
            <div>
                <a href="/admin_update_user/{{$item['email']}}">修改</a>
                <a href="/admin_delete_user/{{$item['email']}}">刪除</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Content End -->
@endsection