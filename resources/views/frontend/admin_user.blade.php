@extends('frontend.layouts.master')

@section('title', 'PetWeb::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Home Start -->
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
                <button>修改</button>
                <button>刪除</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Home End -->
@endsection