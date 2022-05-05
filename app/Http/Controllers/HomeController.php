<?php

namespace App\Http\Controllers;
use DB;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\Rating;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $slug)
    {
        if(CategoryModel::where('slug', $slug)->exists())
        {
            $cartcount = CartModel::where('user_id',Auth::id())->count();
            $category = CategoryModel::where('slug', $slug)->first();
            $product = ProductModel::where('cate_id', $category->id)->get();
            return view('prodview', compact('category','product','cartcount'));
        }
        else{
            return redirect('/')->with('status', "Slug doesnt exists");
        }

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = DB::table('users')->count();
        $product = DB::table('products')->count();
        $orders = DB::table('orders')->count();
        $products = ProductModel::latest()->paginate(6);
        $category = CategoryModel::all();
        return view('dashboard',compact('user','product','orders','products','category'));
    }

}
