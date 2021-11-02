<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(Request $request) {
        $cart = $request->session()->get('cart');
        //dd($cart);
        return response()->json($cart);
    }
    
    public function addToShoppingCart(Request $request) {
        if(!$request->session()->has('cart')) {
            $request->session()->put('cart', [$request->all()]);
        } else {

            $request->session()->push('cart', $request->all());
        }
        return response()->json();
    }

    public function clearShoppingCart(Request $request) {
        
        $request->session()->forget('cart');

        return response()->json('Shopping cart cleared.');
    }
}
