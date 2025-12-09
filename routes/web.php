<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\LearnMoreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Models\Carousel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $carousel = Carousel::all();
    return view('pages.home', compact('carousel'));
})->name('pages.home');

Route::get('about', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('contact', function () {
    return view('pages.contact');
})->name('pages.contact');

Route::get('services', function () {
    return view('pages.services');
})->name('pages.services');



// admin panel routes
Route::resource('admin', AdminController::class);
Route::resource('addProducts', ProductController::class);





// interface routs
Route::get('shop', [ShopController::class, 'index'])->name('pages.shop');

Route::get('order/{productId}', [OrderController::class, 'show'])->name('pages.order')->middleware('auth');











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
