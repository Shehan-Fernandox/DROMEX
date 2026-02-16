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
        $products = Product::all();
        $product_count = Product::count();
        $total_air_serious = Product::where('category', 'Air Serious')->count();
        $total_mini_serious = Product::where('category', 'Mini Serious')->count();
        $total_fpv = Product::where('category', 'FPV')->count();
        return view('admin.addProducts.index', compact('products','product_count', 'total_air_serious', 'total_mini_serious', 'total_fpv'));
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
            'aircraft' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'aircraft_with_rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('aircraft')) {
            $imageName = time() . '_' . $request->aircraft->getClientOriginalName();
            $request->aircraft->move(public_path('upload_aircraft'), $imageName);
            $data['aircraft'] = $imageName;
        }


        if ($request->hasFile('rc')) {
            $rcName = time() . 'rc.' . $request->rc->extension();
            $request->rc->move(public_path('upload_aircraft'), $rcName);
            $data['rc'] = $rcName;
        }

        if ($request->hasFile('aircraft_with_rc')) {
            $aircraft_with_rc_name = time() . 'aircraft_with_rc.' . $request->aircraft_with_rc->extension();
            $request->aircraft_with_rc->move(public_path('upload_aircraft'), $aircraft_with_rc_name);
            $data['aircraft_with_rc'] = $aircraft_with_rc_name;
        }

        Product::create($data);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    // 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.addProducts.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Product $product)
{
    $request->validate([
        'product_name' => 'required|string|max:100|min:2',
        'brand' => 'required|string|max:50',
        'short_description' => 'required',
        'fully_description' => 'required',
        'stock_quantity' => 'required',
        'product_weight' => 'required|string',
        'fly_time' => 'required',
        'camera_resolution' => 'required',
        'battery_capacity' => 'required',
        'aircraft' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'aircraft_with_rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $data = $request->except(['aircraft', 'rc', 'aircraft_with_rc']);

    // aircraft
    if ($request->hasFile('aircraft')) {
        if ($product->aircraft && file_exists(public_path('upload_aircraft/' . $product->aircraft))) {
            unlink(public_path('upload_aircraft/' . $product->aircraft));
        }

        $imageName = time() . '_' . $request->aircraft->getClientOriginalName();
        $request->aircraft->move(public_path('upload_aircraft'), $imageName);
        $data['aircraft'] = $imageName;
    }

    // rc
    if ($request->hasFile('rc')) {
        if ($product->rc && file_exists(public_path('upload_aircraft/' . $product->rc))) {
            unlink(public_path('upload_aircraft/' . $product->rc));
        }

        $rcName = time() . '_' . $request->rc->getClientOriginalName();
        $request->rc->move(public_path('upload_aircraft'), $rcName);
        $data['rc'] = $rcName;
    }

    // aircraft with rc
    if ($request->hasFile('aircraft_with_rc')) {
        if ($product->aircraft_with_rc && file_exists(public_path('upload_aircraft/' . $product->aircraft_with_rc))) {
            unlink(public_path('upload_aircraft/' . $product->aircraft_with_rc));
        }

        $name = time() . '_' . $request->aircraft_with_rc->getClientOriginalName();
        $request->aircraft_with_rc->move(public_path('upload_aircraft'), $name);
        $data['aircraft_with_rc'] = $name;
    }

    $product->update($data);

    return redirect()->route('products.index');
}

  


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $addProduct)
    {
        if ($addProduct->aircraft && file_exists(public_path('upload_aircraft/' . $addProduct->aircraft))) {
            unlink(public_path('upload_aircraft/' . $addProduct->aircraft));
        }

        if ($addProduct->rc && file_exists(public_path('upload_aircraft/' . $addProduct->rc))) {
            unlink(public_path('upload_aircraft/' . $addProduct->rc));
        }

        if ($addProduct->aircraft_with_rc && file_exists(public_path('upload_aircraft/' . $addProduct->aircraft_with_rc))) {
            unlink(public_path('upload_aircraft/' . $addProduct->aircraft_with_rc));
        }

        $addProduct->delete();

        return redirect()->route('addProducts.index')->with('success', 'Product deleted successfully.');
    }
}
