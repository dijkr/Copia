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
//    ->where('category', '(?!cms).*');
/* This route somehow handles /cms/collections */

/* SEARCH PRODUCTS */
Route::post('zoekresultaten', [ProductController::class, 'searchProduct']);

/* DEFAULT */
Route::get('winkelwagen', function () {
    return (new \Statamic\View\View)
        ->template('winkelwagen')
        ->layout('layout');
});

/* DEFAULT */
Route::get('/bestellen', function () {
    return (new \Statamic\View\View)
        ->template('bestellen')
        ->layout('layout');
});

/* DEFAULT */
Route::get('/dashboard', function () {
    return (new \Statamic\View\View)
        ->template('dashboard')
        ->layout('layout');
});
