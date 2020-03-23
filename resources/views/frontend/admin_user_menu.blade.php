@extends('frontend.layouts.master')

@section('title', 'PetWeb::此專案為個人練習使用，無任何營利用途')

@section('content')
<!-- Content Start -->
<div class="content">
    <div class="admin-user-menu">
        <div class="title">
            <div>順序</div>
            <div>欄位名稱</div>
            <div>圖片路徑</div>
            <div>網址路徑</div>
            <div>父層</div>
            <div>類別</div>
        </div>
        @foreach($allUserMenu as $item)
        <div class="menu">
            <div><input type="text" name="id" value="{{$item['id']}}"></div>
            <div><input type="text" name="id" value="{{$item['field']}}"></div>
            <div><input type="text" name="id" value="{{$item['icon_path']}}"></div>
            <div><input type="text" name="id" value="{{$item['route_path']}}"></div>
            <div><input type="text" name="id" value="頂層" disabled></div>
            @if($item['type'] == null)
            <div><input type="text" name="id" value="NULL" disabled></div>
            @else
            <div><input type="text" name="id" value="{{$item['type']}}"></div>
            @endif
        </div>
                @if($item['sub'][0]['field'] !== '')    
                @foreach($item['sub'] as $sub)
                <div class="sub">
                    <div><input type="text" name="id" value="{{$sub['id']}}"></div>
                    <div><input type="text" name="id" value="{{$sub['field']}}"></div>
                    <div><input type="text" name="id" value="{{$sub['icon_path']}}"></div>
                    <div><input type="text" name="id" value="{{$sub['route_path']}}"></div>
                    <div><input type="text" name="id" value="{{$sub['parent']}}"></div>
                    <div><input type="text" name="id" value="{{$sub['type']}}"></div>
                </div>
                @endforeach
                @endif
        @endforeach
    </div>
</div>
<!-- Content End -->
@endsection