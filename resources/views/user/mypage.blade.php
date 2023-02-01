@extends('layouts.layout')


@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
    @if (Auth::check())
        <h2 class="login_user">{{ Auth::user()->name }}さん</h2>
    @endif

    <div class="like_reserve">
        <h2 class="information_title">予約状況</h2>
        <h2 class="like_shops">お気に入り店舗</h2>
    </div>

    <div class="reserve_menu">
        <div class="information">
            @foreach ($shop_users as $shop_user)
                <div class="reserve_container">
                    <span><i class="fa-regular fa-clock" style="color: white; font-size:20px; margin-left: 10%;"></i></span>
                    <h4>予約1</h4>
                    <form action="{{ route('user.reserve.destroy', $shop_user->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="reserve_delete">
                            <i class="fa-regular fa-circle-xmark"
                                style="color:white; font-size:25px;position:absolute; bottom:60px;"></i>
                        </button>
                    </form>
                </div>

                <form action=" {{ route('user.update',$shop_user->id) }}" method="post">
                    @csrf
                    <table class="reserve_status">
                        <tr>
                            <th>Shop</th>
                            <td>{{ $shop_user->shop_name }}</td>
                        </tr>
                        <tr>
                            <th><label>Date</label></th>
                            <td><input type="date" name="date_start" value="{{ $shop_user->date_start }}"></td>
                        </tr>
                        <tr>
                            <th><label>Time</label></th>
                            <td><input type="time" name="time_start" value="{{ $shop_user->time_start }}"></td>
                        </tr>
                        <tr>
                            <th><label>人数</label></th>
                            <td><input type="number" name="sum_people" value="{{ $shop_user->sum_people }}"></td>
                        </tr>
                        <tr>
                            <th>予約日時変更</th>
                            <td><input type="submit" value="予約更新"></td>
                        </tr>
                        <form action="{{url('/pay')}}" method="POST">
                            @csrf
                            @method('PUT')
                        <tr>
                            <th>決済</th>
                            <td><script
                                 src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="{{ env('STRIPE_KEY') }}"
                        ï            data-amount="1000"
                                    data-name="お支払い画面"
                                    data-label="決済"
                                     data-description="現在はデモ画面です"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="JPY">
                             </script></td>
                        </tr>
                        </form>
                    </table>
                </form>
            @endforeach
        </div>

        @foreach ($like as $like)
            <div class="reserve_box" style="margin-left:10%;">
                <img src="{{ asset('storage/images/' . $like->image) }}">
                <h3>{{ $like->shop_name }}</h3>
                <td>#{{ $like->area }}</td>
                <td>#{{ $like->genre }}</td>
                <div class="shops_button">
                    <a href="{{ route('user.shops.detail', $like->id) }}"><button class="shop_detail">詳しく見る</button></a>

                    <span class="likes_button">
                        <form action="{{ route('user.unlike', ['id =>$likes->id']) }}" method="POST">
                            @csrf
                            <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-success"
                                style="color: gray; border:none; font-size:30px; background:white;">
                        </form>

                        <form action="{{ route('user.like', ['id =>$likes->id']) }}" method="POST">
                            @csrf
                            <input type="submit" name="shop_id" value="&#xf004;" class="fas btn btn-danger"
                                style="color: red; border:none; font-size:30px; background:white;">
                        </form>
                    </span>
                </div>
            </div>
            @endforeach
    </div>
@endsection
