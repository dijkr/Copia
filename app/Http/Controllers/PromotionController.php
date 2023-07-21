<?php

namespace App\Http\Controllers;

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
        // Current date
//        $date = strftime("%d-%m-%Y");
        // Get three random promotion-products
        $promotions = Promotion::with('product')
            ->where('ValidUntil', '<=', '26-06-2023')
            ->get()
            ->random(3);

        return View::make('home')
            ->layout('layout')
            ->with(['promotions' => $promotions ]);
        }
};
