<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard (){
        $date = date('Y-m-d');

        $user_count = User::count();
        $pending_count = ProductOrder::where('status','pending')->whereDate('created_at',$date)->count();
        $complete_count = ProductOrder::where('status','complete')->whereDate('created_at',$date)->count();
        $orders = ProductOrder::with('user','product')->whereDate('created_at',$date)->get();
//        dd($user_count,$pending_count,$complete_count,$orders);
        return view('admin.dashboard.index',compact('user_count','pending_count','complete_count','orders'));
    }
    public function alluser()
    {
        $user = User::latest()->withCount('order')-> paginate(10);
        return view('admin.user.index',compact('user'));
    }
}
