<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Auth;
class CartController extends Controller
{
    public function view(Cart $cart){
        if($cart->totalQuantity > 0){
        return view('home.cart.view', compact('cart'));
        }
        else {
            return view('home.cart.notification');
        }
    }

    public function add($id, Cart $cart){
        $auth = Auth::guard('cus')->user();
        
        $pro = Product::find($id);
        if($pro){
            
            $cart->Add($pro);
        return redirect()->route('cart.view', compact('auth'));
        }else{
            return abort(404);
        }
    }

    public function remove($id,$color_id, Cart $cart){
        $cart->Remove($id,$color_id);
        return redirect()->route('cart.view');

    }

    public function update($id, Cart $cart){
        $quantity = request('quantity');
        $cart->Update($id, $quantity);
        return redirect()->route('cart.view');

    }

    public function clear(Cart $cart){
        $cart->Clear();
        return redirect()->route('cart.view');
        
    }
}


