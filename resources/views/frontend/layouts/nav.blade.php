<!-- Nav Start -->
<div class="nav">
    @foreach ($navField as $key => $item)
    <ul class="title">
        <li>
            <a href="{{ $item['route_path'] }}">
            <img src="{{ URL::asset($item['icon_path']) }}" alt="">
            {{$item['field']}}
            </a>
            @if($item['sub'][0]['field'] !== '')
            <ul class="sub">
                @foreach ($item['sub'] as $sub)
                    @if($sub['field'] !== '')
                    <li>
                        <a href="{{ $item['route_path'] }}">
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