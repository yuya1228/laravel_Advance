<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Shop_user;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $areas = $request->input('areas');
        $genres = $request->input('genres');
        $keyword = $request->input('keyword');

        $query = Shop::query();

        $query->join('areas','shops.area_id', '=', 'areas.id')
        ->join('genres','shops.genre_id','=','genres.id')->get();

        if(!empty($areas)){
            $query->where('area','LIKE',$areas);
        }

        if(!empty($genres)){
            $query->where('genre','LIKE',$genres);
        }

        if(!empty($keyword)){
            $query->where('shop_name','LIKE',"%{$keyword}%");
        }

        $items=$query->get();

        $shops =Shop::all();
        $genres = Genre::all();
        $areas = Area::all();
        return view('shops.index',compact('items','shops', 'keyword','genres','areas'));
    }

    public function detail($id)
    {
        $shops = Shop::find($id);
        $genres = Genre::find($id);
        $areas = Area::find($id);
        $shop_users = Shop_user::find($id);
        return view('shops.detail',compact('shops','genres','areas','shop_users'));
    }

    public function reserve(ReserveRequest $request)
    {
        $shop_users = New Shop_user();
        $shop_users->user_id = Auth::id();
        $shop_users->shop_id = $request->input('shop_id');
        $shop_users->date_start = $request->input('date_start');
        $shop_users->time_start = $request->input('time_start');
        $shop_users->sum_people = $request->input('sum_people');
        $shop_users->save();
        return redirect()->route('user.shops.done');
    }

    public function done()
    {
        return view('shops.done');
    }

// 店舗代表者ページ
    public function shop_store()
    {
        $query = Shop_user::query();
        $query->join('shops', 'shop_users.shop_id', '=', 'shops.id')->get();
        $shop_users = $query->get();

        $shops = Shop::all();
        $shop_users = Shop_user::where('user_id', \Auth::user()->id)->get();

        return view('shop_store', compact('shops','shop_users'));
    }

    public function store_create(Request $request)
    {
        $shops = new Shop();
        $shops->area_id = $request->input('area_id');
        $shops->genre_id = $request->input('genre_id');
        $shops->shop_name = $request->input('shop_name');
        $shops->store_overview = $request->input('store_overview');
        $image = $request->file('image');
        $path = $image->store('images','public' );
        dd($path);
        $shops->save();
        return redirect()->route('store.shop_store');
    }

    public function store(Request $request, $id)
    {
        $shops = Shop::find($id);
        $shops->update([
            "shop_name" => $request->shop_name,
            "area_id" => $request->area_id,
            "genre_id"=> $request->genre_id,
            "store_overview" => $request->store_overview,
        ]);

        return redirect()->route('store.shop_store');
    }
}
