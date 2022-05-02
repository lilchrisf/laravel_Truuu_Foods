<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CartModel;


class CartController extends Controller
{
    public function __contruct()
    {
        return $this->middleware('auth');
    }
    public function cartList()
    {
        $cartItems = CartModel::all();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view('cart', compact('cartItems','cartcount'));
    }

// display the items that are selected in the cart and display them on the required page
    public function orderList()
    {
        {
            $cartItems = CartModel::all();
            $cartcount = CartModel::where('user_id',Auth::id())->count();
            return view('payment', compact('cartItems','cartcount'));
        }
    }

// add the selected products and store them in the cart
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

// remove the select item from the cart
    public function removeCart(Request $request)
    {
        CartModel::delete();
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

// delet the specifict data from the database
    public function destroy($id)
    {
        $product = CartModel::find($id);
        $product->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }


// clear our all of the items that are stpre i the cart
    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }


// add the products in the mysql database
    public function addproduct(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');
        $price = $request->input('price');
        if(Auth::check())
        {
            $prod_check = ProductModel::where('id',$product_id)->first();

            if($prod_check)
            {
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name,"already added to cart"]);
                }
                else
                {
                    $cartItem = new CartModel();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id =  Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->price = $price;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name,"added to cart"]);
                }
            }
        }
    }

    public function addProducts(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;

        if (Auth:: check())
        {
            $prod_check = ProductModel::where('id',$product_id)->first();

            if($prod_check)
            {

                if(CartModel::where('id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status'=> $prod_check->name."Already added to cart"]);
                }
                CartModel::create([
                    'prod_id'=>$product_id,
                    'user_id'=>Auth::id(),
                    'prod_qty'=>$product_qty,
                    'price'=> '2457'
                ]);
                return redirect()->back()->with(['success' => 'Product Submit Successfully']);

            }
        }
        else
        {
            return response()->json(['status'=> "Login to continue"]);
        }
    }

    public function viewcart()
    {
        // $cartItems = CartModel::where('user_id',Auth::id())->get();
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        return view ('cart', compact('cartItems','cartcount'));
    }

    public function deleteproduct(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('prod_id');
            if(CartModel::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
            {
                $cartItem = CartModel::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cartItem = $cartItem->delete();

                print($cartItem);

                return response()->json('status', 200);
            }
        }
    }

    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');

        if(Auth::check())
        {
            if(CartModel::where('user_id',Auth::id())->where('prod_id',$prod_id)->exists())
            {
                $cart = CartModel::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
                $cart ->prod_qty = $prod_qty;
                $cart -> save();
                return response()->json('status', 200);
            }
        }

    }
}
