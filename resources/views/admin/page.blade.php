@extends('layouts.layout')

@section('shop_header')
    <h1 style="color: blue; font-weight:bold; font-size:40px; margin-left:10%;">Rese</h1>
@endsection

@section('shop_menu')
<h1>管理者ページ</h1>

    <h2>店舗代表者作成</h2>
    <form action="{{ url('/admin/page') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>代表者名</th>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <td>
                <input type="submit" value="店舗代表者作成">
            </td>
        </table>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
    </form>
@endsection
