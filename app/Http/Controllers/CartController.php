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

    // Get the product
    $product = Product::find($id); // Make sure you have a Product model

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found');
    }

    // Check if product is already in cart
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
            'aircraft' => $product->aircraft, // store the actual image path
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
