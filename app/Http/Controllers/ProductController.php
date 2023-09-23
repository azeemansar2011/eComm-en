<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data= product::all();
        return  view('product',['products'=>$data]);
        
        //return product::all();
    }
    function detail($id)
    {
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart=new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else
        {
            return redirect('login');
        }
        
    }
    static function cartitem()
    {
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
    function cartList()
    {
        $user_id=Session::get('user')['id'];

        $products=Db::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);

    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $user_id=Session::get('user')['id'];

        $total=Db::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $user_id=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$user_id)->get();
        foreach($allcart as $cart)
        {
            $order=new Order();
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();

            Cart::where('user_id',$user_id)->delete();
        }
        return redirect('/');
    }
}
