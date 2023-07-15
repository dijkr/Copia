<?php
    setlocale(LC_TIME, 'nl_NL'); // Set the locale to Dutch
    $date = strftime("%A %e %B"); // Current date format = e.g. zondag 21 mei
    $week = strftime("%W"); // Number of the week
?>

@extends('components.layout')
@section('content')

    {{-- PROMOTION - CURRENT WEEK --}}
    <div class="aanbiedingsactie">
        <div class="aanbiedingsactie-item">
            <img src="{{Vite::asset('resources/backend/assets/img/banners/banner_food.jpeg')}}">
            <div class="text-overlay-actie">
                <h2>Aanbiedingsactie {{ 'week' . " " . $week }}</h2>
                <h3>subkop aanbiedingsactie</h3>
                <a href="/aanbiedingen">Aanbiedingen</a>
            </div>
        </div>
    </div>

    {{-- PROMOTION - PRODUCTS --}}
    {{-- PARENT --}}
    <div class="grid-actie-parent">

        {{-- PROMOTION-PRODUCT --}}
        @foreach ($promotions as $promotion)
            <div class="grid-actie">
                <a href="{{ '/product/' . $promotion->product->slug }}">
                    <div class="grid-actie-left">
                        <h4> {{ $promotion->product->Title }} </h4>
                        {{ $promotion->product->Shortdescription }}
                    </div>

                    <div class="grid-actie-right">
                        <img src="{{ '/images/' . $promotion->product->Image }}">
                        {{ number_format($promotion->DiscountPrice, 2) }}
                    </div>
                </a>
            </div>
        @endforeach

        {{-- NIEUWS --}}
        <div class="nieuws">
            <div class="nieuws-item">
                <img src="{{Vite::asset('resources/backend/assets/img/banners/banner_meal.png')}}">
                <div class="text-overlay-nieuws">
                    <h2>Nieuwbericht</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi architecto debitis dicta dolore earum, expedita fugit modi nam quasi quia quibusdam ratione reiciendis sint sit tempore velit, voluptate?</h3>
                    <a href="#">Volledige tekst</a>
                </div>
            </div>
        </div>

    </div> {{-- Closing div for grid-actie-parent --}}

@endsection {{-- Closing section for content --}}

