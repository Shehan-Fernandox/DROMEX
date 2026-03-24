<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    public function addToCart($id)
    {
        $user = Auth::user();



        $cart = Cart::where('user_id', $user->id)
            ->where('product_id', $id)
            ->first();

        if ($cart) {
            $cart->quantity += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $id,
                'quantity' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }



    public function cart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();

        return view('pages.cart', compact('cartItems'));
    }


    public function remove($id)
    {
        Cart::find($id)->delete();

        return redirect()->back()->with('success', 'Item removed');
    }
}
