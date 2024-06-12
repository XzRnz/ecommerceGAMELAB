<?php
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
Route::get('/cart','App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/cart/store', 'App\Http\Controllers\CartController@addToCart')->name('cart.store');
Route::put('/cart/update', 'App\Http\Controllers\CartController@updateCart')->name('cart.update');


Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});


