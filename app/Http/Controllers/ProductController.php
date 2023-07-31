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
                'category' => $category
            ]);
    }

    // Get one product
    public function showProduct(Request $request)
    {
        // Find the product
        $product = basename($request->getRequestUri());
        // Get the product data
        $product = Product::where('slug', $product)->first();
        // Get the category data
        $category = $product->Category;

        return View::make('product')
            ->layout('layout')
            ->with(['product' => $product,
                'category' => $category
            ]);
    }

    // Search products
    public function searchProduct(Request $request)
    {
        // Database query
        $keyword = $request->input('keyword');
        $products = Product::where('Title', 'LIKE', '%' . $keyword . '%')->get();

        $searchResults = $products->groupBy('Subcategory')->mapWithKeys(function ($products, $key) {
            $subcategory = json_decode($key, true);
            $name = $subcategory['name'];
            return [$name => $products];
        });

        return View::make('searchresults')
            ->layout('layout')
            ->with(['searchResults' => $searchResults
            ]);
    }

}
