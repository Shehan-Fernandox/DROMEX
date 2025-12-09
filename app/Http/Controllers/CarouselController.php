<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $carousel = Carousel::all();
        return view('pages.home', compact('carousel'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate input
        $validated = $request->validate([
            'description' => 'required|string|max:255',

            'carousel_image' => 'nullable|image|max:2048', // optional image, max 2MB
        ]);

        // handle file upload if present
        if ($request->hasFile('carousel_image')) {
            $path = $request->file('carousel_image')->store('carousel', 'public');
            $validated['carousel_image'] = $path;
        }

        // create the post using mass assignment
        $carousel = Carousel::create($validated);

        // redirect with success message
        return back()->with('success', 'Post created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        //
    }
}
