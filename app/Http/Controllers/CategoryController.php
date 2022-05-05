<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CartModel;
use App\Models\Rating;
use App\Models\Users;
use DB;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category');
    }

    public function categoryList()
    {
        $categories = CategoryModel::all();
        $user = DB::table('users')->count();
        $product = DB::table('products')->count();
        $orders = DB::table('orders')->count();
        return view('dashcategory', compact('categories','user','product','orders'));
}

public function categoryListe()
{
    $categories = CategoryModel::all();

    return view('editcategory', compact('categories'));
}

// add and store new data to the datbase
public function store(Request $request)
{
    $category = new CategoryModel;
    $category->name = $request->input('name');
    $category->slug = $request->input('slug');
    $category->description = $request->input('description');
    $category->status = $request->input('status') == TRUE ? '1':'0';
    $category->popular = $request->input('popular') == TRUE ? '1':'0';
    $category->meta_title = $request->input('meta_title');
    $category->meta_keyword = $request->input('meta_keyword');
    $category->meta_descrip = $request->input('meta_descrip');
    $category->image = $request->input('image');
    $category->save();
    return redirect()->back()->with(['success' => 'Product Submit Successfully']);
}

// edit the data in the database
public function edit($id)
{
    $category = CategoryModel::find($id);
    return view('editcategory', compact('category'));
}




// give the updates to the edit items in the data base
public function update(Request $request, $id)
{
    $category = CategoryModel::find($id);
    $category->name = $request->input('name');
    $category->slug = $request->input('slug');
    $category->description = $request->input('description');
    $category->status = $request->input('status') == TRUE ? '1':'0';
    $category->popular = $request->input('popular') == TRUE ? '1':'0';
    $category->meta_title = $request->input('meta_title');
    $category->meta_keyword = $request->input('meta_keyword');
    $category->meta_descrip = $request->input('meta_descrip');
    $category->image = $request->input('image');
    $category->update();
    return redirect('dashcategory')->with('status','category Updated Successfully');
}

// delet the specifict data from the database
public function destroy($id)
{
    $category = CategoryModel::find($id);
    $category->delete();
    return redirect()->back()->with('status','category Deleted Successfully');
}


public function category(){
    $category = CategoryModel::all();
    $categories = CategoryModel::where('popular','1')->get();
    $cartcount = CartModel::where('user_id',Auth::id())->count();
    return view ('category', compact('category','categories','cartcount'));
}

public function categoryview(){
    $category = CategoryModel::all();
    $categories = CategoryModel::where('popular','1')->get();
    $cartcount = CartModel::where('user_id',Auth::id())->count();
    return view ('welcome', compact('category','cartcount','categories'));
}

public function viewcategory($slug)
{
    if(CategoryModel::where('slug', $slug)->exists())
    {
        $cartcount = CartModel::where('user_id',Auth::id())->count();
        $category = CategoryModel::where('slug', $slug)->first();
        $product = ProductModel::where('cate_id', $category->id)->get();
        // $product = ProductModel::where('cate_id', $category->id)->where('status','0')->get();
        return view('prodview', compact('category','product','cartcount'));
    }
    else{
        return redirect('/')->with('status', "Slug doesnt exists");
    }

}

public function viewproduct($cate_slug, $prod_slug)
{
    if(CategoryModel::where('slug', $cate_slug)->exists())
    {
        if(ProductModel::where('name',$prod_slug)->exists())
        {
            $product = ProductModel::where('name', $prod_slug)->first();
            $cartcount = CartModel::where('user_id',Auth::id())->count();
            // $ratings = Rating::where('prod_id', $product->id)->get();
            // $rating_sum = Rating::where('prod_id', $product->id)->sum('stars_rated');
            // $rating_value = $rating_sum/$ratings->count();
            // if($ratings->count() > 0)
            // {
            //     $rating_value = $rating_sum/$ratings->count();
            // }
            // else
            // {
            //     $rating_value = 0;
            // }
            return view('view',compact('product','cartcount'));
        }
     else{
         return redirect('/')->with('status', "The link was broken");
     }
 }
     else{
         return redirect('/')->with('status', "No such Category was found");
     }

}
}
