<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function home(){
        $products = Products::all();
        return view('home', compact('products'));
    }
    public function addCart(Request $request){
        Session::put('p_id', $request->id);
        return redirect(route('Cart'));
    }
    public function cart(){
        $id = Session::get('p_id');
        $product = Products::findorfail($id);
        return view('cart', compact('product'));
    }
    public function buy(Request  $request){
        $id = $request->id;
        $product = Products::findorfail($id);
        $amount = $request->amount;

        return view('order', compact('product', 'amount'));
    }

}
