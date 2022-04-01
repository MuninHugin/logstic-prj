<div class="grid header__topmenu">
<a href="{{route('home')}}"  class="header__logo" style="background: url({{asset('/img/header/LogoE3PL@2x.png')}}) no-repeat; background-size: contain;"></a>
<nav class="header__topmenu-list">
        <ul>
            @foreach ($menu as $item)
            <li><a class="header__topmenu-list_link" href="{{$item['link']}}">{{$item['title']}}</a></li>
            @endforeach
        </ul>
    </nav>
</div>
