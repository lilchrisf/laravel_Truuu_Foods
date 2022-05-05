<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $members = ProductModel::latest()->paginate(5);
        return view('dashboard',compact('members'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function countUser(){
        $user = DB::table('users')->count();
        $product = DB::table('products')->count();
        $orders = DB::table('orders')->count();
        $products = ProductModel::all();
        $category = CategoryModel::all();
        return view('dashboard',compact('user','product','orders','products','category'));
    }

    public function orderview($id)
    {
        $orders = OrderModel::where('id', $id)->where('user_id', Auth::id ())->get();
        return view ('orderview', compact('orders'));
    }


    public function products()
    {
        $products = ProductModel::all();
        return view('dashboard', compact('products'));
    }


    public function create()
    {
        return view('dashboard');
    }


    public function add()
    {
        $category = CategoryModel::all();
        return view('editproduct', compact('category'));
    }

// add and store new data to the datbase
    public function store(Request $request)
    {
        // dd($request);

        $product = new ProductModel;
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->image = $request->input('image');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status');
        $product->trending = $request->input('trending');
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->save();
        return redirect()->back()->with(['success' => 'Product Submit Successfully']);
    }

// edit the data in the database
    public function edit($id)
    {
        $product = ProductModel::find($id);
        $category = CategoryModel::all();
        return view('editproduct', compact('product','category'));
    }




// give the updates to the edit items in the data base
public function update(Request $request, $id)
    {
        $product = ProductModel::find($id);
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->image = $request->input('image');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status');
        $product->trending = $request->input('trending');
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keyword = $request->input('meta_keyword');
        $product->update();
        return redirect('dashboard')->with('status','Product Updated Successfully');
    }

// delet the specifict data from the database
    public function destroy($id)
    {
        $product = ProductModel::find($id);
        $product->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }


// show products on view page that the user click on
public function view($cate_slug, $product_slug)
{
    if(CategoryModel::where('name', $name)->exists())
    {
        if(ProductModel::where('name','slug')->exists())
        {
            $product = ProductModel::where('name', $name)->first();
            return view('view',compact('product'));
        }
     else{
         return redirect('/')->with('status', "The link was broken");
     }
 }
     else{
         return redirect('/')->with('status', "No such Category was found");
     }

}


// search bar search products by name
  public function search(Request $request)
  {
      $search_product = $request->product_name;

      if($search_product != "")
      {
          $product =  ProductModel::where('name','Like',"%$search_product%")->with('cate')->first();

          if($product)
          {
              return redirect('view-product/'.$product->cate->slug.'/'.$search_product);
          }
          else
          {
              return redirect()->back()->with("status", "No produts match your search");
          }
      }
      else
      {
          return redirect()->back();
      }
    //    return ProductModel::where("name","Like","%".$name."%")->get();
  }


// display the drop down product list for the search using Ajax
  public function productlistAjax()
  {
      $products = ProductModel::select('name')->where('status','0')->get();
      $data = [];

      foreach ($products as $item) {
          $data[] = $item['name'];
      }
      return $data;
  }
}
