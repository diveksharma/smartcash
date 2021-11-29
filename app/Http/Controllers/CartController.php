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
        
        $value = $request->session()->pull('cart', $request->all());
    }

    public function removeItemCart(Request $request) {
                    
        $items = $request->session()->get('cart');

        foreach ($items as $key => $value) { 
            if($value['id'] === $request->id){
                unset($items[$key]);
                break;
            }
        }
        $arr = [];
        foreach($items as $item) {
            array_push($arr, $item);
        }
        session()->put('cart', $arr);

        return response()->json();

    }
}
