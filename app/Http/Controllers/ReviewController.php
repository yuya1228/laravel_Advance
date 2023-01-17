<?php

namespace App\Http\Controllers;

use App\Models\ShopReview;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = ShopReview::all();
        return view('review',compact('reviews'));
    }

    public function review(ReviewRequest $request)
    {
        $reviews = new ShopReview();
        $reviews -> user_id = Auth::id();
        $reviews -> shop_name= $request->shop_name;
        $reviews -> stars = $request-> stars;
        $reviews -> comment = $request ->comment;
        $reviews ->save();
        return redirect()->route('user.review')->with('message','評価いただきありがとうございます！');
    }
}
