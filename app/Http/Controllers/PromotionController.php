<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function showPromotions (Request $request) {
        $promotions = Promotion::all();
//        dd($promotions);
        return view ('aanbiedingen', [
            'promotions' => $promotions
        ]);
    }

    public function showRandomPromotions (Request $request) {
        // Get all promotions
        $promotions = Promotion::with('product')->get();
        // Create random collection
        $promotions = $promotions->random(3);
        return view ('home', [
            'promotions' => $promotions
        ]);
    }
}
