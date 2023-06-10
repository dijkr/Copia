<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function week ()
    {
        $week = strftime("%W"); // Number of the week
        return $week;
    }

    public function showPromotions (Request $request) {
        $promotions = Promotion::all();
        return view ('aanbiedingen', [
            'promotions' => $promotions
        ]);
    }

    public function showRandomPromotions (Request $request) {
        // Current date
        $date = strftime("%d-%m-%Y");
        // Get all promotions valid until a specific date
        $promotions = Promotion::with('product')
            ->where('ValidUntil', '<=', '26-06-2023')
            ->get();
        // Create random collection
        $promotions = $promotions->random(3);
        return view ('home', [
            'promotions' => $promotions
        ]);
    }
}
