<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Statamic\View\View;

class CategoryController extends Controller
{
    // Get all categories
    public function showCategories (Request $request) {
        $categories = Category::all();
        // dd($categories);

        return View::make('categorien')
            ->layout('layout')
            ->with(['categories' => $categories
            ]);
    }

    // Get information about a promotions
    public function categoryData (Request $request) {
        $category = basename($request->getRequestUri());
        $categoryData = Category::where('slug', $category)->first();
//        dd($promotions);

        return View::make('producten')
            ->layout('layout')
            ->with(['categoryData' => $categoryData
            ]);
    }

}
