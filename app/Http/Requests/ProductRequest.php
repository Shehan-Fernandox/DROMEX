<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'product_name' => 'required|string|max:255|min:5|regex:/^[A-Za-z0-9\s\-]+$/',

            'brand' => 'required',

            'short_description' => 'required',

            'fully_description' => 'required',

            'stock_quantity' => 'required|integer|min:0',

            'product_weight' => 'required',

            'fly_time' => 'required',

            'camera_resolution' => 'required',

            'battery_capacity' => 'required',

            'aircraft' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'aircraft_with_rc' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'product_name.regex' => 'Product name contains invalid characters.',
            
            'stock_quantity.integer' => 'Stock quantity must be a number.',
            'aircraft.image' => 'Aircraft must be an image file.',
        ];
    }
}