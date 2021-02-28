<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use Session;    
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('products.product_index',['products'=>$data]);
    }

    public function product_detail($id){
       //return Product::find($id); //to check data coming or not
       $data = Product::find($id);
       return view('products.product_detail',['product_detail'=>$data]);

    }

    public function product_search(Request $req){
        // return $req->input(); use to check

        //return $data = Product::                    where('name','like','%'.$req->input('query').'%')->get(); //to check data coming or not

        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('products.product_search',['product_search'=>$data]);
    }

    public function add_to_cart(Request $req){

        if($req->session()->has('user')){
           // return "Hello";//use to check whether login or not
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    //public function cartItem(){ //if u give like this u will get the error "Non-static method App\Http\Controllers\ProductController::cartItem() should not be called statically (View: E:\xampp\htdocs\ecommerce1\resources\views\header.blade.php) (View: E:\xampp\htdocs\ecommerce1\resources\views\header.blade.php) (View: E:\xampp\htdocs\ecommerce1\resources\views\header.blade.php)" so you will give function name like below
    static function cartItem(){

        $userId = Session::get('user')['id']; 
        //return $userId;
         return Cart::where('user_id',$userId)->count();

        //return view('header',['usercount'=>$userId_count]);
    }


    public function cart_list(){
        //return "Hello"; //use to check whether this function work or not
        //if($req->session()->has('user')){
        $userId = Session::get('user')['id']; 
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id','=',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('products.cartlist',['products'=>$products]);
      
    }

    public function remove_cart($id){
        Cart::destroy($id);
        return redirect('/cart_list');

    }

    public function order_now(){
        $userId = Session::get('user')['id']; 
        $total=  DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id','=',$userId)       
        ->sum('products.price');
        return view('products.order_now',['total'=>$total]);
    }

    public function order_place(Request $req){
         // return $req->input(); use to check
        $userId = Session::get('user')['id']; 
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment_method;
            $order->payment_status = "pending";
            $order->address = $req->address;            
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        // $req->input();
            //Cart::where('user_id',$userId)->delete();
            return redirect('/');        
    }

    public function my_orders(){
         // return "orders"; use to check
        $userId = Session::get('user')['id']; 
        $orders=  DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id','=',$userId)       
        ->get();
        return view('products.my_orders',['orders'=>$orders]);
    }

    
}
