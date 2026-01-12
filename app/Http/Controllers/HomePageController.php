<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mini = Product::where('category', 'Mini Serious')
            ->latest()           // ORDER BY created_at DESC
            ->take(4)            // LIMIT 4
            ->get();

        $fpv = Product::where('category', 'FPV')
            ->latest()
            ->take(4)
            ->get();

        $air = Product::where('category', 'Air Serious')
            ->latest()
            ->take(4)
            ->get();

        $allProducts = Product::all();

        return view('pages.home', compact('mini', 'fpv', 'air', 'allProducts'));
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
