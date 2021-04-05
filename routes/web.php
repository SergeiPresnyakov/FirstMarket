<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function() {
    phpinfo();
});

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/{id}/products', [ProductController::class, 'categoryProducts'])->name('category_products');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/order', [CartController::class, 'order'])->name('order');
