<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_orders = Order::count();
        $orders = Order::all();
        return view('admin.adminOrder.index', compact('orders', 'total_orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    // Validate input
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'first_name' => 'required|string|max:255',
        'last_name'  => 'required|string|max:255',
        'email'      => 'required|email',
        'address'    => 'required|string',
        'city'       => 'required|string',
        'province'   => 'required|string',
        'zip'        => 'required|string',
    ]);

    // Get product details
    $product = Product::findOrFail($request->product_id);

    // Create order
    Order::create([
        'user_id'        => auth()->id(),
        'product_id'     => $product->id,
        'product_name'   => $product->product_name,
        'product_price'  => $product->product_price,
        'aircraft'  => $product->aircraft, // column name in products table
        'first_name'     => $request->first_name,
        'last_name'      => $request->last_name,
        'email'          => $request->email,
        'address'        => $request->address,
        'city'           => $request->city,
        'province'       => $request->province,
        'zip'            => $request->zip,
    ]);

    return redirect()->back()->with('success', 'Order placed successfully!');
}


    /**
     * Display the specified resource.
     */
     public function show($productId)
    {

        $product = Product::findOrFail($productId);

        return view('pages.order', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
