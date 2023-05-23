<?php
    setlocale(LC_TIME, 'nl_NL'); // Set the locale to Dutch
    $date = strftime("%A %e %B"); // Current date format = e.g. zondag 21 mei
    $week = strftime("%W"); // Number of the week
?>

@extends('components.layout')

@section('content')
    <div class="aanbiedingsactie">
        <div class="aanbiedingsactie-item">
            <img src="{{Vite::asset('resources/backend/assets/img/banners/banner_food.jpeg')}}">
            <div class="text-overlay-actie">
            <h2>Aanbiedingsactie</h2>
            <h3>subkop aanbiedingsactie</h3>
            <a href="#">Aanbieding</a>
            </div>
        </div>
    </div>

    {{-- ACTIES --}}
<div class="grid-actie-parent">

    <div class="grid-actie">
        <a href="#">
            <div class="grid-actie-left">
                <h4>Aanbiedingsproduct</h4>
                Korte omschrijving
            </div>

            <div class="grid-actie-right">
                <img src="{{Vite::asset('resources/backend/assets/img/bananen.png')}}">
                3.00 EUR
            </div>
        </a>
    </div>

    <div class="grid-actie">
        <a href="#">
            <div class="grid-actie-left">
                <h4>Aanbiedingsproduct</h4>
                Korte omschrijving
            </div>

            <div class="grid-actie-right">
                <img src="{{Vite::asset('resources/backend/assets/img/chocola.png')}}">
                3.00 EUR
            </div>
        </a>
    </div>

    <div class="grid-actie">
        <a href="#">
            <div class="grid-actie-left">
                <h4>Aanbiedingsproduct</h4>
                Korte omschrijving
                </div>

            <div class="grid-actie-right">
                <img src="{{Vite::asset('resources/backend/assets/img/tomaten.png')}}">
                3.00 EUR
            </div>
        </a>
    </div>
</div>

    {{-- NIEUWS --}}
    <div class="nieuws">
        <div class="nieuws-item">
            <img src="{{Vite::asset('resources/backend/assets/img/banners/banner_meal.png')}}">
        <div class="text-overlay-nieuws">
            <h2>Nieuwbericht</h2>
            <h3>Korte tekst nieuwsbericht</h3>
            <a href="#">Volledige tekst</a>
        </div>
        </div>
    </div>

@endsection
