<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    /* PRODUCTS - ALL PRODUCTS FROM ONE CATEGORY, SORTED PER SUBCATEGORY */
    public function showProductsBySubcategory (Request $request) {
        $category = basename($request->getRequestUri());
        // Query products based on the category
        $products = Product::where('category', $category)->get();
        // Get the subcategory values from the products
        $subcategoryValues = $products->pluck('Subcategory')->toArray();
        // Query category data
        $categoryData = Category::where('slug', $category)->first();
        return view('producten', [
            'products' => $products,
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
