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
        $promotions = Promotion::with('product','product.category')
            ->where('ValidUntil', '<=', '31-12-2034')
            ->get();

        // Return the view without promotions, if $promotions is null
        if($promotions->isEmpty()) {
            return View::make('home')
                ->layout('layout');
        }

        // Show three random promotions
        $randomPromotions = $promotions->random(3);

        return View::make('home')
            ->layout('layout')
            ->with(['promotions' => $randomPromotions,
                ]);
        }
};
