<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get products, grouped per subcategory
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

    // Get one product
    public function showProduct (Request $request) {
        // Find the product
        $product = basename($request->getRequestUri());
        // Get the product data
        $product = Product::where('slug', $product)->first();
        // Get the category data
        $category = $product->Category;
        return view('product', [
            'product' => $product,
            'category' => $category
        ]);
    }
}
