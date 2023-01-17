@extends('layouts.layout')

@section('shop_header')

 <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>

    <div class="shop_search">
        <form action="{{ route('user.shops.index') }}" method="GET">
            @csrf
            <table>
                <tr>
                    <td>
                        <select class="area" name="areas">
                            <option value="">All area</option>
                            @foreach ($areas->unique('area') as $area)
                                <option value="{{ $area->area }}">{{ $area->area }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="genre" name="genres">
                            <option value="">All genre</option>
                            @foreach ($genres->unique('genre') as $genre)
                                <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </td>
                    <td>
                        <input name="keyword" type="text" value="{{ $keyword }}" placeholder="Search..." />
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection

@section('shop_menu')

    @foreach ($items as $item)
        <div class="shop_box">
            <img src="{{ asset('storage/images/' . $item->image) }}">
            <h3>{{ $item->shop_name }}</h3>
            <td>#{{ $item->area }}</td>
            <td>#{{ $item->genre }}</td>
            <div class="shop_button">
                <a href="{{ route('user.shops.detail', $item->id) }}"><button class="shop_detail">詳しく見る</button></a>

                <span class="like_button">
                    <form action="{{ route('user.unlike',$item)}}" method="POST">
                        @csrf
                        <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-success"
                            style="color: gray; border:none; font-size:30px; background:white;">
                    </form>

                    <form action="{{ route('user.like',$item->id)}}" method="POST">
                        @csrf
                        <input type="submit" name="shop" value="&#xf004;" class="fas btn btn-danger"
                            style="color: red; border:none; font-size:30px; background:white;">
                    </form>
                </span>
            </div>
        </div>
    @endforeach
@endsection
