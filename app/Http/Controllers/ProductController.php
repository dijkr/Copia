<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Statamic\View\View;

class ProductController extends Controller
{
    // Get products, grouped per subcategory
    public function showGroupedProducts(Request $request)
    {

        // Find the promotions
        $categorySlug = basename($request->getRequestUri());

        // Get the promotions data
        $category = Category::where('slug', $categorySlug)->first();

        // Group products by subcategory
        $products = Product::whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->get();
        $groupedProducts = $products->groupBy('Subcategory')->mapWithKeys(function ($products, $key) {
            $subcategory = json_decode($key, true);
            $name = $subcategory['name'];
            return [$name => $products];
        });

        return View::make('producten')
            ->layout('layout')
            ->with(['groupedProducts' => $groupedProducts,
                'category' => $category,
                'categorySlug' => $categorySlug,
            ]);
    }

    // Get one product
    public function showProduct($categorySlug, $productSlug)
    {
        // Get the product data
        $product = Product::where('slug', $productSlug)->first();

        // Get the category data
        $category = $product->Category;

        return View::make('product')
            ->layout('layout')
            ->with([
                'product' => $product,
                'category' => $category
            ]);
    }

    // Search products
    public function searchProduct(Request $request)
    {
        // Database query, using the keyword
        $keyword = $request->input('keyword');
        $products = Product::with('category')
            ->where('Title', 'LIKE', '%' . $keyword . '%')
            ->get();
        $searchResults = $products->groupBy('category')->mapWithKeys(function ($products, $key) {
            $subcategory = json_decode($key, true);
            $name = $subcategory['name'];
            return [$name => $products];
        });

        return View::make('searchresults')
            ->layout('layout')
            ->with(['searchResults' => $searchResults,
                    'keyword' => $keyword,
            ]);
    }

}
