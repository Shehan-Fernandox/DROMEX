<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
        'aircraft'
    ];
}
