<?php

use Illuminate\Support\Facades\Route;

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

//Available Sarees Page
Route::get('/',[\App\Http\Controllers\SareesController::class, 'SareesShop'])->name('sarees');

//product detail
Route::get('/sarees/details/{id}/{slug}', [\App\Http\Controllers\SareesController::class, 'SareesDetails']);

//product-color
Route::get('/product/color/sort', [\App\Http\Controllers\SareesController::class, 'productColor'])->name('product.color.sort');

//product-sort
Route::get('/product/sort', [\App\Http\Controllers\SareesController::class, 'productSort'])->name('product.sort');

//product-sort
Route::get('category/product', [\App\Http\Controllers\SareesController::class, 'CategoryDetails'])->name('category.product');

//product-filter
Route::get('filter', [\App\Http\Controllers\SareesController::class, 'filters'])->name('filter');
