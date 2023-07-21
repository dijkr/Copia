<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    // Get the number of the current week
    public function week ()
    {
        // Number of the current week
        $week = strftime("%W");
        return $week;
    }

    // Get all promotions
    public function showPromotions (Request $request)
    {
        $promotions = Promotion::all();
        return (new \Statamic\View\View)
            ->template('aanbiedingen')
            ->layout('layout')
            ->with(['promotions' => '$promotions']);
    }

    // Get random promotions
    public function showRandomPromotions (Request $request)
    {
        // Current date
        $date = strftime("%d-%m-%Y");
        // Get all promotions valid until a specific date
        $promotions = Promotion::with('product')
            ->where('ValidUntil', '<=', '26-06-2023')
            ->get();
        // Create random collection
        $promotions = $promotions->random(3);
        return (new \Statamic\View\View)
            ->template('home')
            ->layout('layout')
            ->with(['promotions' => '$promotions']);
        }};
