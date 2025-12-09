<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_count = Product::count();
        $products = Product::all();
        return view('admin.addProducts.index', compact('products','product_count'));
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
         Product::create([
            'product_name' => $request->product_name,
            'brand' => $request->brand,
            'short_description' => $request->short_description,
            'fully_description' => $request->fully_description,
            'product_price' => $request->product_price,
            'stock_quantity' => $request->stock_quantity,
            'product_weight' => $request->product_weight,
            'fly_time' => $request->fly_time,
            'camera_resolution' => $request->camera_resolution,
            'battery_capacity' => $request->battery_capacity,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($productId)
    {

        $product = Product::findOrFail($productId);

        return view('pages.learn_more', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.addProducts.update');
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
