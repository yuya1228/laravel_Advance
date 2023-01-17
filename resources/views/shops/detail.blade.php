@extends('layouts.layout')

@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
    <div class="detail_container">
        <div class="shop_reserve">
            <table class="back_icon">
                <td><a href="{{ route('user.shops.index') }}"><button>＜</button></a></td>
                <td>
                    <h2 class="shop_menu">{{ $shops->shop_name }}</h2>
                </td>
            </table>
            <img class="shop_image" src="{{ asset('storage/images/' . $shops->image) }}">

            <p>#{{ $areas->area }}#{{ $genres->genre }}</p>
            <p>{{ $shops->store_overview }}</p>
        </div>

        <div class="reserve">
            <h2>予約</h2>
            <form action="{{ route('user.reserve.store', $shop_users->shop_id) }}" method="POST">
                @csrf
                <ul>
                    <li><input type="date" value="{{ old('date_start') }}" name="date_start"></li>
                    @error('date_start')
                        <td>{{ $message }}</td>
                    @enderror
                    <li><input type="time" value="{{ old('time_start') }}" name="time_start"
                            style="width:90%; height:4%; margin-top:3%"></li>
                    @error('time_start')
                        <td>{{ $message }}</td>
                    @enderror
                    <li>
                        <input type="number" name="sum_people" , min="0" value="{{ old('sum_people') }}" placeholder="予約人数">
                    </li>
                    @error('sum_people')
                        <td>{{ $message }}</td>
                    @enderror
                </ul>
                <table class="reserve_information">
                    <tr>
                        <th>Shop</th>
                        <td>{{ $shops->shop_name }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $shop_users->date_start }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $shop_users->time_start }}</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>{{ $shop_users->sum_people }}</td>
                    </tr>
                </table>
                <input type="submit" class="reserve_start">
                <input type="hidden" name="shop_id" value="{{ $shop_users->shop_id }}">
            </form>
        </div>
    </div>
@endsection
