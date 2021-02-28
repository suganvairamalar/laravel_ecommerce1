<?php
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\ProductController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/login');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::post('/register',[UserController::class,'register']);

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('product_detail/{id}',[ProductController::class,'product_detail']);
Route::get('product_search',[ProductController::class,'product_search']);
Route::post('/add_to_cart',[ProductController::class,'add_to_cart']);
Route::get('/cart_list',[ProductController::class,'cart_list']);
Route::get('remove_cart/{id}',[ProductController::class,'remove_cart']);
Route::get('/order_now',[ProductController::class,'order_now']);
Route::post('/order_place',[ProductController::class,'order_place']);
Route::get('/my_orders',[ProductController::class,'my_orders']);
