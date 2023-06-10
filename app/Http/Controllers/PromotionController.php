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
        $promotions = Promotion::all();
//        dd($promotions);
        return view ('home', [
            'promotions' => $promotions
        ]);
    }
}
