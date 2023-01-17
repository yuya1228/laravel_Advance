<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/c8e6f2d527.js" crossorigin="anonymous"></script>
</head>
<header style="margin-bottom: 5%;">

    <button type="button" class="menu-btn" style="background-color: blue">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="menu">
      <div class="menu__item"><a href="{{ url('/') }}">HOME</a></div>
      <div class="menu__item"><a href="{{url('/register')}}">Registration</a></div>
      <div class="menu__item"><a href="{{ url('/login')}}">Login</a></div>
    </div>
    <h1 style="font-size: 300%; color: blue; font-weight:bold; margin-left:10%;">Rese</h1>
</header>

<body>
    <div class="card-header"
        style="background-color: blue; color:white; height:55px; font-size:20px; display:inline-block; margin:5% 0  0 35%; width:30%; border-radius:5px 5px 0 0; padding:1%;box-shadow: 5px 0px 5px rgb(196, 195, 195);">
        Registration</div>
    <div
        style="margin: auto; background-color:white; width:30%; box-shadow: 5px 5px 5px rgb(196, 195, 195); border-radius:0 0 5px 5px; padding:2%;">
        {{ $slot }}
    </div>
</body>

</html>
