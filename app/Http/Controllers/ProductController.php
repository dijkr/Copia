<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* PRODUCTS - GROUPED BY SUBCATEGORY */
    public function showGroupedProducts (Request $request) {
        dd($request);
        // Find the category
        $category = basename($request->getRequestUri());
        // Query products based on the category
        $products = Product::where('category', $category)->get();
        // Group products by subcategory
        dd($products);
        $groupedProducts = $products->groupBy('Subcategory');
        // Query category data
        $categoryData = Product::where('slug', $category)->first();
        return view('producten', [
            'groupedProducts' => $groupedProducts,
            'category' => $categoryData
        ]);
    }

    /* PRODUCT - ONE PRODUCT */
    public function showProduct (Request $request) {
        $product = basename($request->getRequestUri());
        $product = Product::where('slug', $product)->first();
        $category = $product->Category;
        $categoryData = Category::where('slug', $category)->first();
        return view('product', [
            'product' => $product,
            'category' => $categoryData
        ]);
    }
}
