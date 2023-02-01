<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop_user;
use App\Models\Like;

class UserController extends Controller
{
    public function mypage()
    {
        $query = Shop_user::query();
        $query->join('shops', 'shop_users.shop_id', '=', 'shops.id')->get();
        $shop_users = $query->get();

        $query = Like::query();
        $query->join('shops','likes.shop_id', '=', 'shops.id')
        ->join('areas', 'shops.area_id', '=', 'areas.id')
        ->join('genres', 'shops.genre_id', '=', 'genres.id')->get();
        $like = $query->get();

        $shop_users = Shop_user::where('user_id', \Auth::user()->id)->get();
        return view('user.mypage',compact('shop_users','like'));
    }

    public function update(Request $request,$id)
    {
        $shop_users = Shop_user::find($id);
        $shop_users->update([
            "date_start" => $request->date_start,
            "time_start" => $request->time_start,
            "sum_people" => $request->sum_people,
        ]);

        return redirect()->route("user.user.mypage")->with('message', '予約情報を更新しました。');
    }

    public function destroy($id)
    {
        $shop_users = Shop_user::find($id);
        $shop_users->delete();

        return redirect()->route('user.user.mypage');
    }
}
