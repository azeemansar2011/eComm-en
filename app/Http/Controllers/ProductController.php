<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;

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
}
