<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('brand');

            $table->text('short_description');
            $table->text('fully_description');
            $table->integer('product_price');
            $table->integer('stock_quantity');
            $table->string('product_weight');
            $table->string('fly_time');
            $table->string('camera_resolution');
            $table->string('battery_capacity');
            $table->string('aircraft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
