<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});
Route::get('indexcss', function () {return view('indexcss');});
Route::get('dashorder', function (){return view('dashorder');});
Route::get('food', function () {return view('food');});
Route::get('foodcss', function (){return view('foodcss');});
Route::get('contact', function (){return view('contact');});
Route::get('contactcss', function (){return view('contactcss');});
Route::get('header', function (){return view('header');});
Route::get('checkout', function (){return view('checkout');});
Route::get('javascript', function (){return view('javascript');});
Route::get('dashtile', function (){return view('dashtile');});
Route::get('rabit', function (){return view('rabit');});
Route::get('footer', function (){return view('footer');});
Route::get('order', function (){return view('order');});
Route::get('userview', function (){return view('userview');});
Route::get('userdash', function (){return view('userdash');});




Route::get('dash', function (){return view('dash');});
Route::get('dashboard', function (){return view('dashboard');});
Route::get('dashcss', function (){return view('dashcss');});
Route::get('about', function (){return view('about');});
Route::get('aboutcss', function (){return view('aboutcss');});
Route::get('dashmembers', function (){return view('dashmembers');});
Route::get('dashmessage', function (){return view('dashmessage');});
Route::get('dashitems', function (){return view('dashitems');});
Route::get('indexcss', function (){return view('indexcss');});
Route::get('editproduct', function (){return view('editproduct');});
Route::get('editcategory', function (){return view('editcategory');});
Route::get('dashorder', function (){return view('dashorder');});
Route::get('payment', function (){return view('payment');});
Route::get('view', function (){return view('view');});
Route::get('dashcategory', function (){return view('dashcategory');});
Route::get('category', function (){return view('category');});
Route::get('prodview', function (){return view('prodview');});


Route::post('add.product',   [ProductController::class, 'store']);
Route::post('dashboard',     [ProductController::class, 'index']);
Route::get ('add.product',   [ProductController::class, 'create']);
Route::get ('dashboard',     [ProductController::class, 'countUser']);
Route::get ('editproduct',   [ProductController::class, 'add']);
Route::get ('edit-product/{id}',   [ProductController::class, 'edit']);
Route::put ('update-product/{id}', [ProductController::class, 'update']);
Route::get ('delete-product/{id}', [ProductController::class, 'destroy']);
Route::get ('product-list', [ProductController::class, 'productlistAjax']);
Route::get ('searchproduct', [ProductController::class, 'search']);
Route::get ('view-category/{cate_slug}/{product_slug}', [ProductController::class, 'view']);


Route::post('dashmembers', [MemberController::class, 'index']);
Route::get ('dashmembers', [MemberController::class, 'memberList']);

Route::get ('dashitems', [OrderController::class, 'orderitem']);
Route::get ('dashorder', [OrderController::class, 'orderList']);

Route::get ('dashorderview', [OrderController::class, 'view']);
Route::get ('admin/view-order/{id}', [OrderController::class, 'view']);

Route::put ('update-order/{id}', [OrderController::class, 'updateorder']);
Route::get ('order-history', [OrderController::class, 'orderhistory']);
Route::put ('admin/view-order/{id}', [OrderController::class, 'neworderview']);


Route::post('contact', [ContactController::class, 'contactForm'])->name('booking.custom');
Route::post('contact', [ContactController::class, 'store'])->name('booking.custom');
Route::get ('dashmessage', [ContactController::class, 'messageList']);

Route::get('about', [CountController::class, 'cartcount']);
Route::get('contact', [CountController::class, 'count']);
Route::get('/', [CountController::class, 'countcart']);


Route::get ('dashcategory', [CategoryController::class, 'categoryList']);
Route::get ('/', [CategoryController::class, 'categoryview']);
Route::post('add.category', [CategoryController::class, 'store']);
Route::get ('delete-category/{id}', [CategoryController::class, 'destroy']);
Route::get ('edit-category/{id}',   [CategoryController::class, 'edit']);
Route::put ('update.category/{id}', [CategoryController::class, 'update']);
Route::get ('category', [CategoryController::class, 'category']);
Route::get ('prodview', [CategoryController::class, 'viewcategory']);
Route::get ('view-category/{slug}', [CategoryController::class, 'viewcategory']);
Route::get ('view-product/{cate_slug}/{prod_slug}', [CategoryController::class, 'viewproduct']);



// Route::get('dashboard', [HomeController::class, 'adminHome'])->name('dashboard')->middleware('is_admin');
// Route::get('dashboard', [HomeController::class,'products'])->name('dashboard')->middleware('is_admin');
// Route::post ('addto-cart',[CartController::class, 'addProducts']);
// Route::get('addto-cart', function(){
//     return 'es';
// });

Route::middleware('auth')->group(function () {
    Route::get  ('cart',        [CartController::class, 'cartList'])->name('cart.list');
    Route::get  ('payment',     [CartController::class, 'orderList']);
    Route::post ('place-order',[CheckoutController::class, 'placeorder']);
    Route::post ('addto-cart', [CartController::class, 'addProducts']);
    Route::post ('cart',        [CartController::class, 'addProducts'])->name('cart.store');
    Route::post ('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post ('remove',      [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post ('clear',       [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::post ('cart',       [CartController::class, 'viewcart']);
    Route::post ('delete-cart-item', [CartController::class, 'deleteproduct']);
    Route::post ('update-cart', [CartController::class, 'updatecart']);
    Route::post ('add-rating',   [RatingController::class, 'add']);
    Route::get ('load-cart-data',   [RatingController::class, 'cartcount']);


    Route::get ('userorder',   [UserController::class, 'index']);
    Route::get ('userview',   [UserController::class, 'view']);
    Route::get ('view-order/{id}',   [UserController::class, 'view']);

    // Route::get ('add-review/{product_slug}/userreview',   [UserController::class, 'userreview']);
    // Route::post ('my-orders',   [UserController::class, 'index']);



    Route::post('proceed-to-pay',   [CheckoutController::class, 'razorpaycheck']);
    // Route::post('',[CheckoutController::class, 'placeorder']);
    Route::post('payment',[CheckoutController::class, 'check']);

});



Route::get('/users', function (Request $request) {
    $users = User::paginate(10);
    return $users;
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



