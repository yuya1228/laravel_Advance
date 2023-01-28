<?php

namespace App\Http\Controllers;

use App\Models\Store;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.page');
    }

    public function store(Request $request)
    {
        $store_user = new Store();
        $store_user->name = $request->name;
        $store_user->email = $request->email;
        $store_user->password = $request->password;
        $store_user->save();
        return redirect()->route('admin.admin.page')->with('message', '店舗代表者を作成しました。');
    }
}
