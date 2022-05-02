<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use App\Models\Rating;

use Illuminate\Http\Request;

class Ratingcontroller extends Controller
{
    public function add(Request $request)
    {
        $stars_rated = $request->input('product_rating');
        $product_id = $request->input('product_id');

        $product_check = ProductModel::where('id', $product_id)->where('status','0')->first();
        if($product_check)
        {
            $verified_purchase = OrderModel::where('orders.user_id', Auth::id())
            ->join('order_items', 'orders.id','order_items.order_id')
            ->where('order_items.prod_id', $product_id)->get();

            if($verified_purchase)
            {
                $existing_rating = Rating::where('user_id', Auth::id())->where('prod_id',$product_id)->first();
                if($existing_rating)
                {
                    $existing_rating->stars_rated = $stars_rated;
                    $existing_rating->update();
                }
                else
                {
                Rating::create([
                    'user_id'=> Auth::id(),
                    'prod_id'=> $product_id,
                    'stars_rated'=> $stars_rated,
                ]);
            }
            return redirect()->bacl()->with('status','Thank you for Rating this product');
        }
            else
            {
                return redirect()->back()->with('status', "You connot Rate a product without purchasing");
            }
        }
        else
        {
            return redirect()->back()->with('status', "this link you followed was broken");
        }
    }
}
