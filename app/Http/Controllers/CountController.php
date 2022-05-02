<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CartModel;

use Illuminate\Http\Request;

class CountController extends Controller
{
    function countUser(){
        $user = DB::table('users')->count();
        $product = DB::table('product_models')->count();
        $orders = DB::table('orders')->count();
        return view('dashboard',compact('user','product','orders',));
    }

    public function cartcount(){
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('about', compact('cartcount'));
    }

    public function countcart(){
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('welcome', compact('cartcount'));
    }

    public function count(){
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('contact', compact('cartcount'));
    }
}
