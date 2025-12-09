<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Product::create([
        //     'product_name' => $request->product_name,
        //     'product_brand' => $request->product_brand,
        //     'short_description' => $request->short_description,
        //     'fully_description' => $request->fully_description,
        //     'product_price' => $request->product_price,
        //     'stock_quantity' => $request->stock_quantity,
        //     'product_weight' => $request->product_weight,
        //     'fly_time' => $request->fly_time,
        //     'camera_resolution' => $request->camera_resolution,
        //     'battery_capacity' => $request->battery_capacity,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
