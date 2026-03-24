<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    public function index()
{
     $cartCount = Cart::where('user_id', Auth::id())->count();
     return view('layouts.nav', compact('cartCount'));
}
}
