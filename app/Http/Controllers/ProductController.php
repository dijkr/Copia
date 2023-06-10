<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* PRODUCTS - GROUPED BY SUBCATEGORY */
    public function showGroupedProducts (Request $request) {
        // Find the category
        $categorySlug = basename($request->getRequestUri());
        // Group products by subcategory
        $products = Product::whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug); })->get();
        $groupedProducts = $products->groupBy('Subcategory');
        // Get the category data
        $product = $products->first();
        $categoryData = $product->Category;

        return view('producten', [
            'groupedProducts' => $groupedProducts,
            'categoryData' => $categoryData
        ]);
    }

    /* PRODUCT - ONE PRODUCT */
    public function showProduct (Request $request) {
        $product = basename($request->getRequestUri());
        $product = Product::where('slug', $product)->first();
        $category = $product->Category->name;
        $categoryData = Category::where('slug', $category)->first();
        return view('product', [
            'product' => $product,
            'category' => $categoryData
        ]);
    }
}
