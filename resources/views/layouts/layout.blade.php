<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel_Shop</title>
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e6f2d527.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @vite(['resources/js/app.js'])
</head>

<header>
    @yield('shop_header')
    <button type="button" class="menu-btn">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="menu">
        <div class="menu__item"><a href="{{ url('/') }}">HOME</a></div>
        <div class="menu__item"><a href="{{ route('user.logout') }}">Logout</a></div>
        <div class="menu__item"><a href="{{ url('/mypage') }}">Mypage</a></div>
        <div class="menu__item"><a href="{{ url('/review') }}">Review</a></div>
    </div>
</header>

<body>
    @yield('shop_menu')
</body>

</html>
