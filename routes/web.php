<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\ProductController;

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

/* FRONTPAGE */
Route::get('/', function () {
    return view('home');
});

/* CATEGORIES - ALL MAIN CATEGORIES */
Route::get('categorien', function () {
    return view('categorien', [
        'categories' => Category::all()
    ]);
});

Route::get('/aanbiedingen', function () {
    return view('aanbiedingen');
});

Route::get('winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/bestellen', function () {
    return view('bestellen');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/* PRODUCTS - ALL PRODUCTS FROM ONE CATEGORY, SORTED PER SUBCATEGORY */
Route::get('/categorie/{category:slug}', [ProductController::class, 'showCategory']);

/* PRODUCT - ONE PRODUCT */
Route::get('/product/{product:slug}', [ProductController::class, 'showProduct']);
