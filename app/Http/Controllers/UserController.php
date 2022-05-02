<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\OrderModel;
use App\Models\CartModel;
use App\Models\ItemModel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $orders = OrderModel::where('user_id', Auth::id())->get();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view('userorder', compact('orders','cartcount'));
    }

// display a view to the user of there own product purchase
    public function view($id)
    {
        $orders = OrderModel::where('id', $id)->where('user_id', Auth::id())->first();
        // $orders = OrderModel::with('orderitems')->where('id', $id)->where('user_id', Auth::id())->first()->toArray();
        // $orders = OrderModel::with('orderitems')->get();
        // dd($orders);

        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('userview', compact('orders','cartcount'));
    }

    public function orderview($id)
    {
        $orders = OrderModel::where('id', $id)->where('user_id', Auth::id ())->get();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('orderview', compact('orders','cartcount'));
    }

    public function neworderview()
    {
        $orders = OrderModel::where('user_id', Auth::id())->get();
        // $orders = OrderModel::where('id', $id)->where('user_id', Auth::id())->first();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('userview', compact('orders','cartcount'));
    }
}
