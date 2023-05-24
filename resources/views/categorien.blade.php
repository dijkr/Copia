@extends('components.layout')

@section('content')

    <div class="grid-cat-1">
        <a href="/groenten">
        <div class="grid-item-cat-1">
            <img src="{{Vite::asset('resources/backend/assets/img/broccoli.png')}}">
            <div class="overlay-text-cat">Groenten</div>
        </div></a>

    <a href="#">
        <div class="grid-item-cat-1">
            <img src="{{Vite::asset('resources/backend/assets/img/brood.png')}}">
            <div class="overlay-text-cat">Broden</div>
        </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/bananen.png')}}">
                <div class="overlay-text-cat">Fruit</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/frisdrank.png')}}">
                <div class="overlay-text-cat">Frisdrank</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/senseo.png')}}">
                <div class="overlay-text-cat">Koffie en Thee</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/vlees.png')}}">
                <div class="overlay-text-cat">Vleeswaren</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/maaltijd.png')}}">
                <div class="overlay-text-cat">Maaltijden</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/kitkat.png')}}">
                <div class="overlay-text-cat">Snoep, Koek, Chocola, Chips</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/zuivel-2.png')}}">
                <div class="overlay-text-cat">Zuivel</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/tandpasta.png')}}">
                <div class="overlay-text-cat">Drogisterij</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/pampers.png')}}">
                <div class="overlay-text-cat">Baby en Kind</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/whiskas-2.png')}}">
                <div class="overlay-text-cat">Huisdieren</div>
            </div></a>

    </div>

@endsection
