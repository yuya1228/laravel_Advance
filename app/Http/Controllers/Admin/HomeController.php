<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins');
    }


    public function index()
    {
        $admin = Admin::find(Auth::guard('admins')->id());
        return view('admin.dashboard', compact('admin'));
    }
}
