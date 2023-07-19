<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get all categories
    public function showCategories (Request $request) {
        $categories = Category::all();
        // dd($categories);
        return view ('categorien', [
           'categories' => $categories
        ]);
    }

    // Get information about a category
    public function categoryData (Request $request) {
        $category = basename($request->getRequestUri());
        $categoryData = Category::where('slug', $category)->first();
//        dd($category);
        return view ('producten', [
            'categoryData' => $categoryData
        ]);
    }

}
