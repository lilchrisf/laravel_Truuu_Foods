<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\ItemModel;
use App\Models\CartitemModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\CartModel;
use App\Models\User;




class CheckoutController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $old_cartitems = CartModel::where('user_id', Auth::id())->get();
        foreach($old_cartitems as $item)
        {
// checking if the quantty is greater than or equal to what the owner store in his cart
            if(!ProductModel::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists())
            {
                $removeItem = CartModel::where('user_id', Auth::id()->where('prod_id',$item->prod_id)->first());
                $removeItem-> delete();
            }

        }
        $cartitems = CartModel::where('user_id', Auth::id())->get();
        return view('payment',compact('cart'));
    }


    public function placeorder(Request $request)
    {
        $tracknum = 'lilchris'.rand(1111,9999);
        $order = new OrderModel();
        $order->user_id = auth::id();
        $order->fname  = $request->input('fname');
        $order->lname  = $request->input('lname');
        $order->phone  = $request->input('phone');
        $order->email  = $request->input('email');
        $order->parish = $request->input('parish');
        $order->town   = $request->input( 'town' );

// To caculate the totoal price
        $total =0;
        $cartitems_total = Cartmodel::where('user_id',Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->selling_price;
        }
        $order-> total_price = $total;
        $order->tracking_no = $tracknum;
        $order->save();

        // get current order
        $currentOrder = OrderModel::where('tracking_no','=',$tracknum)->get()->toArray();
        // dd();

        $cartitems = CartModel::where('user_id',Auth::id())->get();
        foreach($cartitems as $item)
        {
            ItemModel::create([
                'order_id'=> $currentOrder[0]['id'],
                'prod_id'=> $item->prod_id,
                'qty'=> $item->prod_qty,
                'price'=> $item->products->selling_price,
                'order_model_id'=> $currentOrder[0]['id'],
            ]);

            $prod = ProductModel::where('id', $item->prod_id)->first();
            $prod->qty =$prod->qty -$item->prod_qty;
            $prod->update();
        }
// auto fill the user info on the checkout
        if(Auth::user()->parish == NULL)
        {
            $user = User::where('id',Auth::id())->first();
            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone = $request->input('phone');
            $user->parish = $request->input('parish');
            $user->town = $request->input('town');
            $user->update();
        }

        $cartitems = CartModel::where('user_id', Auth::id())->get();
        CartModel::destroy($cartitems);

        return redirect('category')->with('status', "Order Place successfully");
        }

        public function check(Request $request){
            $prod_id = $request->input('prod_id');
            $prod_qty = $request->input('prod_qty');
            $price = $request->input('price');

            $cart = new CartModel();
            $cart->user_id  = auth::id();
            $cart->prod_id  = $request->input('prod_id');
            $cart->prod_qty = $request->input('prod_qty');
            $cart->price = $request->input('price');
            $cart->save();

            return redirect('payment')->with('status', "Order Place successfully");
        }

        public function razorpaycheck(Request $request)
        {
            $cartitems = CartModel::where('user_id', Auth::id())->get();
            $total_price = 0;
            foreach($cartitems as $item)
            {
                if(!ProductModel::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists())
                {
                    $total_price = $item->products->selling_price * $item->prod_qty;
                }
                $fname = $request ->input('fname');
                $lname = $request ->input('lname');
                $phone = $request ->input('phone');
                $email = $request ->input('email');
                $parish = $request->input('parish');
                $town  = $request ->input('town');

                return response()->json([
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'phone'=>$phone,
                    'email'=>$email,
                    'parish'=>$parish,
                    'town'=>$town ,
                    'total_price' => $total_price,
                ]);

            }
            return view('payment',compact('cart'));
        }


}
