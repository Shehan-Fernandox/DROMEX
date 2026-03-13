<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

    public function index(Request $request)
    {
         if ($request->filled('search')) {
            // Get paginated search results from MeiliSearch / Scout
            $productSearch = Product::search($request->search)->paginate(5);
        } else {
            // Show all products paginated
            $productSearch = Product::latest()->paginate(5);
        }

        $mini = Product::where('category','Mini Serious')->get();
        $fpv = Product::where('category','FPV')->get();
        $air = Product::where('category','Air Serious')->get();
        return view('pages.shop', compact('mini','fpv','air','productSearch'));
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
        //
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
