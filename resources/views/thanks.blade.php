@extends('layouts.layout')

@section('shop_header')
<h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection
@section('shop_menu')

<div class="thanks_message">
<h2>会員登録ありがとうございます。</h2>

<a href="{{url('/login')}} ">
    <button class="log_button">ログインする</button>
</a>
</div>
@endsection
