@extends('layouts.layout')

@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
    <h2>店舗情報作成</h2>
    <form action="{{ route('store.store_create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>ショップエリア</th>
                <td>
                    <input type="hidden" name="area_id">
                    <select name="area_id">
                        <option value=""></option>
                        <option value="1">東京都</option>
                        <option value="2">大阪府</option>
                        <option value="3">福岡県</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td>
                    <input type="hidden" name="genre_id">
                    <select name="genre_id">
                        <option value="">ジャンル</option>
                        <option value="1">寿司</option>
                        <option value="2">焼肉</option>
                        <option value="3">居酒屋</option>
                        <option value="4">イタリアン</option>
                        <option value="5">ラーメン</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>店舗名</th>
                <td>
                    <input type="text" name="shop_name">
                </td>
            </tr>
            <tr>
                <th>店舗説明</th>
                <td>
                    <input type="hidden" name="store_overview">
                    <textarea name="store_overview" cols="50" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <th>店舗画像</th>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="店舗作成">
                </td>
            </tr>
        </table>
    </form>

    <h2>店舗情報変更</h2>
    @foreach ($shops as $shop)
        <form action="{{ route('store.store', $shop->id) }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>店舗名</th>
                    <td><input type="text" name="shop_name" value="{{ $shop->shop_name }}"></td>
                </tr>
                <tr>
                    <th>エリア</th>
                    <td><input type="hidden" name="area_id">
                        <select name="area_id">
                            <option value=""></option>
                            <option value="1">東京都</option>
                            <option value="2">大阪府</option>
                            <option value="3">福岡県</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>ジャンル</th>
                    <td> <input type="hidden" name="genre_id">
                        <select name="genre_id">
                            <option value=""></option>
                            <option value="1">寿司</option>
                            <option value="2">焼肉</option>
                            <option value="3">居酒屋</option>
                            <option value="4">イタリアン</option>
                            <option value="5">ラーメン</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>店舗説明</th>
                    <td>
                        <textarea name="store_overview" cols="50" rows="10">{{ $shop->store_overview }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th>編集</th>
                    <td><input type="submit" value="更新">
                    </td>
                </tr>
            </table>
        </form>
    @endforeach

    <h2>予約情報確認</h2>
    @foreach ($shop_users as $shop_user)
        <div class="information">
            <table class="reserve_status">
                <tr>
                    <th>Shop</th>
                    <td>{{ $shop_user->shop_name }}</td>
                </tr>
                <tr>
                    <th><label>Date</label></th>
                    <td>{{ $shop_user->date_start }}"</td>
                </tr>
                <tr>
                    <th><label>Time</label></th>
                    <td>{{ $shop_user->time_start }}"</td>
                </tr>
                <tr>
                    <th><label>人数</label></th>
                    <td>{{ $shop_user->sum_people }}</td>
                </tr>
            </table>
        </div>
    @endforeach
@endsection
