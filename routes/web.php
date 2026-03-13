<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AirSeriousController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FpvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LearnMoreController;
use App\Http\Controllers\MiniSeriousController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ViewOrderController;
use App\Models\Carousel;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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
Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('admin', AdminController::class);
    Route::resource('products', ProductController::class);
    Route::resource('adminOrder', OrderController::class);

});


Route::middleware('auth')->group(function () {

Route::get('/profile', [ProfileController::class, 'index'])->name('pages.user_profile');

});



// interface routs
Route::get('/', [HomePageController::class, 'index'])->name('pages.home');
Route::get('shop', [ShopController::class, 'index'])->name('pages.shop');

Route::get('order/{productId}', [OrderController::class, 'show'])->name('pages.order')->middleware('auth');
Route::post('/order/store',[OrderController::class, 'store'])->name('order.store');


Route::get('learn-more/{productId}', [LearnMoreController::class, 'show'])->name('pages.learn-more');


Route::get('slider', function(){
    return view('pages.slider');
})->name('pages.slider');

// order history
Route::get('profile', [ProfileController::class, 'index'])->name('pages.profile');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//category of drones
Route::get('air_serious', [AirSeriousController::class, 'index'])->name('pages.air_serious');
Route::get('mini_serious', [MiniSeriousController::class, 'index'])->name('pages.mini_serious');
Route::get('fpv', [FpvController::class, 'index'])->name('pages.fpv');





Route::get('/live-search',[ProductController::class,'liveSearch']);