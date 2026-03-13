<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'product_name',
        'brand',
        'short_description',
        'fully_description',
        'product_price',
        'stock_quantity',
        'product_weight',
        'fly_time',
        'camera_resolution',
        'battery_capacity',
        'category',
        'aircraft',
        'rc',
        'aircraft_with_rc'

    ];

     public function toSearchableArray()
    {
        return [
            'name' => $this->product_name,
            'description' => $this->fully_description,
            'aircraft' => $this->aircraft,
        ];
    }
}
