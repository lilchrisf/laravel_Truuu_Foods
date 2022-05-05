<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderModel;
use App\Models\OrderitemModel;
use App\Models\ItemModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderModel::latest()->paginate(5);

        return view('dashorder',compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function orderList()
    {
        $orders = OrderModel::where('status','0')->get();
        return view('dashorder', compact('orders'));
    }

    public function orderitem()
    {
        $items = ItemModel::all();
        return view('dashitems', compact('items'));
    }

    public function updateorder(Request $request, $id)
    {
        $orders = OrderModel::find($id);
        $orders->status = $request->input('status');
        $orders->update();
        return view('dashorderview', compact('orders'))->with('status',"Order updated");
    }

    public function view($id)
    {
        $orders = OrderModel::where('id', $id)->first();
        return view('dashorderview', compact('orders'));
    }


    public function orderhistory()
    {
        $orders = OrderModel::where('status','1')->get();
        return view('dashorderhistory', compact('orders'));
    }
}
