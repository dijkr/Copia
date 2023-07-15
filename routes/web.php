<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\CategoryController;

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

/* FRONTPAGE - HOME */
Route::get('/', [PromotionController::class, 'showRandomPromotions']);

/* CATEGORIES - OVERVIEW */
Route::get('categorien', [CategoryController::class, 'showCategories']);

/* PROMOTIONS - OVERVIEW */
Route::get('aanbiedingen', [PromotionController::class, 'showPromotions']);

/* PRODUCTS - OVERVIEW GROUPED BY CATEGORY */
Route::get('/categorie/{category:slug}', [ProductController::class, 'showGroupedProducts']);

/* PRODUCT - ONE PRODUCT */
Route::get('/product/{product:slug}', [ProductController::class, 'showProduct']);

/* DEFAULT */
Route::get('winkelwagen', function () {
    return view('winkelwagen');
});

/* DEFAULT */
Route::get('/bestellen', function () {
    return view('bestellen');
});

/* DEFAULT */
Route::get('/dashboard', function () {
    return view('dashboard');
});
