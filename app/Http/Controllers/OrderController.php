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
        return view('admin.adminOrder.index');
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
    Order::create([
        'user_id'    => auth()->id(),
        'product_id' => $request->product_id, // ✅ FIXED
        'first_name' => $request->first_name,
        'last_name'  => $request->last_name,
        'email'      => $request->email,
        'address'    => $request->address,
        'city'       => $request->city,
        'province'   => $request->province,
        'zip'        => $request->zip,
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
