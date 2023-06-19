@php
$menu_header = config('menus.header_menu');
@endphp


<header>
        <div class="container d-flex">
                <img src="/img/logo-boolflix.png" alt="logo">

        <ul class="nav">
            @foreach ($menu_header as $item)
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ Route::currentRouteName() === $item['href'] ? 'active' : ' ' }}">{{ $item['text'] }}</a>
            </li>
            @endforeach

        </ul>
        </div>
</header>
