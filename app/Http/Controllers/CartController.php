<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    public function addItem($productId)
    {

        // $cart = Cart::where('user_id', Auth::user()->id)->first();

        // if(!$cart) {
        //     $cart = new Cart();
        //     $cart->user_id=Auth::user()->id;
        //     $cart->save();
        // }

        $cartItem = new CartItem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= 1;
        $cartItem->save();

        return redirect()->back()->with('message', '成功加入購物車');
    }
}
