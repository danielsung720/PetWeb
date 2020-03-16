<!-- Nav Start -->
<div class="user_menu">
    @foreach ($userMenu as $key => $item)
    <ul class="title">
        <li>
            <a href="{{ route($item['route_name']) }}">
            <img src="{{ URL::asset($item['icon_path']) }}" alt="">
            {{$item['field']}}
            </a>
            @if($item['sub'][0]['field'] !== '')
            <ul class="sub">
                @foreach ($item['sub'] as $sub)
                    @if($sub['field'] !== '')
                    <li>
                        <a href="">
                        <img src="{{ URL::asset($sub['icon_path']) }}" alt="">
                        {{$sub['field']}}
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>
            @endif
        </li>
    </ul>
    @endforeach
</div>
<!-- Nav End -->