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
        @if(count($userData) > 1)
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
            <div class="control-box">
                <form method="GET" action="admin_user">
                {!! csrf_field() !!}
                    <div>
                        <input type="text" name="email" placeholder="請輸入信箱">
                        <button type="submit">查詢</button>
                    </div>
                </form>
                <div>
                    {{$userData->render()}}
                </div>
            </div>
        @else
            <div class="list">
                <div>1</div>
                <div>{{$userData[0]['email']}}</div>
                <div>{{$userData[0]['name']}}</div>
                <div>
                    <a href="/admin_update_user/{{$userData[0]['email']}}">修改</a>
                    <a href="/admin_delete_user/{{$userData[0]['email']}}">刪除</a>
                </div>
            </div>
            <div class="control-box">
                <form method="GET" action="admin_user">
                {!! csrf_field() !!}
                    <div>
                        <input type="text" name="email" placeholder="請輸入信箱">
                        <button type="submit">查詢</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>
<!-- Content End -->
@endsection