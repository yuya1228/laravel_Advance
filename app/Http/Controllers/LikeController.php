<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($id)
    {
        Like::create([
            'shop_id'=>$id,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->route('user.shops.index');
    }

    public function unlike($id)
    {
        $like = Like::where('shop_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();

        return redirect()->route('user.shops.index');
    }
}
