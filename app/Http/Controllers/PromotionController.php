<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Statamic\View\View;

class PromotionController extends Controller
{
    // Get all promotion-products
    public function showPromotions (Request $request)
    {
        $promotions = Promotion::all();

        return View::make('aanbiedingen')
            ->layout('layout')
            ->with(['promotions' => $promotions ]);
    }

    // Get random promotions
    public function showRandomPromotions (Request $request)
    {
        // Get three random promotion-products
        $promotions = Promotion::with('product')
            ->where('ValidUntil', '<=', '31-12-2034')
            ->get();
        $categories = Category::all();
//        dd($categories);

        // Return the view without promotions, if $promotions is null
        if($promotions->isEmpty()) {
            return View::make('home')
                ->layout('layout');
        }

        $randomPromotions = $promotions->random(3);
        $category = $randomPromotions->pluck('product.category_id')->toArray();
        $categoryNames = $categories->whereIn('id', $category)
            ->pluck('name', 'id')
            ->toArray();
//        dd($categoryNames);

        return View::make('home')
            ->layout('layout')
            ->with(['promotions' => $randomPromotions,
                    'category' => $categoryNames
                ]);
        }
};
