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

Route::get('/', function () {
    return view('home');
});

Route::get('/categorien', function () {
    return view('categorien');
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

Route::get('/groenten', function () {
    return view('producten');
});

Route::get('/broccoli', function () {
    return view('product');
});
