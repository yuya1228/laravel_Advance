@extends('layouts.layout')

@section('shop_header')
<h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
<div class="register_message">
<h2>ご予約ありがとうございます。</h2>

<a href="{{route('user.shops.index')}} ">
    <button class="register_button">戻る</button>
</a>
</div>
@endsection
