<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_count = Product::count();
        $users_count = User::count();
        $products = Product::all();
        return view('admin.addProducts.index', compact('products', 'product_count', 'users_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addProducts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'brand' => 'required',
            'short_description' => 'required',
            'fully_description' => 'required',
            'stock_quantity' => 'required',
            'product_weight' => 'required',
            'fly_time' => 'required',
            'camera_resolution' => 'required',
            'battery_capacity' => 'required',
            'aircraft' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('aircraft')) {
            $imageName = time() . '_' . $request->aircraft->getClientOriginalName();
            $request->aircraft->move(public_path('upload_aircraft'), $imageName);
            $data['aircraft'] = $imageName;
        }

        Product::create($data);
        return redirect()->route('addProducts.index');
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
    public function edit(Product $addProduct)
    {
        return view('admin.addProducts.update',compact('addProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $addProduct)
{
    $request->validate([
        'product_name' => 'required|string|max:10|min:5',
        'brand' => 'required|string|min:3|max:3',
        'short_description' => 'required',
        'fully_description' => 'required',
        'stock_quantity' => 'required',
        'product_weight' => 'required|string',
        'fly_time' => 'required',
        'camera_resolution' => 'required',
        'battery_capacity' => 'required',
        'aircraft' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $data = $request->all();

    if ($request->hasFile('aircraft')) {
        if ($addProduct->aircraft && file_exists(public_path('upload_aircraft/' . $addProduct->aircraft))) {
            unlink(public_path('upload_aircraft/' . $addProduct->aircraft));
        }

        $imageName = time() . '_' . $request->aircraft->getClientOriginalName();
        $request->aircraft->move(public_path('upload_aircraft'), $imageName);
        $data['aircraft'] = $imageName;
    }

    $addProduct->update($data);

    return redirect()->route('addProducts.index');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Product $addProduct)
{
    if ($addProduct->aircraft && file_exists(public_path('upload_aircraft/' . $addProduct->aircraft))) {
        unlink(public_path('upload_aircraft/' . $addProduct->aircraft));
    }

    $addProduct->delete();

    return redirect()->route('addProducts.index')->with('success', 'Product deleted successfully.');
}

}
