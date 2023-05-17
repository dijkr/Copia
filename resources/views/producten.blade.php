@extends('components.layout')

@section('content')
    <div class="content">
        <h1>Producten</h1>
    </div>

    <div class="grid-products-1">
        <a href="#">
        <div class="grid-item-products-1">
            <img src="{{Vite::asset('resources/backend/assets/img/Groenten.png')}}">
            <div class="overlay-text-products">Groenten</div>
        </div></a>

    <a href="#">
        <div class="grid-item-products-1">
            <img src="{{Vite::asset('resources/backend/assets/img/Broden.png')}}">
            <div class="overlay-text-products">Broden</div>
        </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/fruits.jpg')}}">
                <div class="overlay-text-products">Fruit</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/frisdrank.jpg')}}">
                <div class="overlay-text-products">Frisdrank</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/koffie-thee.png')}}">
                <div class="overlay-text-products">Koffie en Thee</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/vleeswaren.jpg')}}">
                <div class="overlay-text-products">Vleeswaren</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/maaltijden.png')}}">
                <div class="overlay-text-products">Maaltijden</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/snoep.png')}}">
                <div class="overlay-text-products">Snoep, Koek, Chocola, Chips</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/zuivel.png')}}">
                <div class="overlay-text-products">Zuivel</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/tandpasta.png')}}">
                <div class="overlay-text-products">Drogisterij</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/baby.png')}}">
                <div class="overlay-text-products">Baby en Kind</div>
            </div></a>

        <a href="#">
            <div class="grid-item-products-1">
                <img src="{{Vite::asset('resources/backend/assets/img/huisdier.png')}}">
                <div class="overlay-text-products">Huisdieren</div>
            </div></a>

    </div>

@endsection
