@extends('layouts.layout')

@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
    <div class="review_shop">
        <h2>店舗評価</h2>
        <form action="{{ route('user.review.shop') }}" method="post">
            @csrf
            <table class="review">
                <tr>
                    <th>店舗名</th>
                    <td><input type="text" name="shop_name" value="{{ old('shop_name') }}">
                        @error('shop_name')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>レビュー</th>
                    <td>
                        <textarea name="comment" value="{{ old('commnet') }}" cols="50" rows="10"></textarea>
                        @error('comment')
                        {{$message}}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>評価</th>
                    <td>
                        <div class="rate-form" value="{{ old('stars') }}">
                            <input id="star5" type="radio" name="stars" value="5">
                            <label for="star5">★</label>
                            <input id="star4" type="radio" name="stars" value="4">
                            <label for="star4">★</label>
                            <input id="star3" type="radio" name="stars" value="3">
                            <label for="star3">★</label>
                            <input id="star2" type="radio" name="stars" value="2">
                            <label for="star2">★</label>
                            <input id="star1" type="radio" name="stars" value="1">
                            <label for="star1">★</label>
                        </div>
                        @error('stars')
                        {{$message}}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
            </table>
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif
        </form>
    </div>
@endsection
