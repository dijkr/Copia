@extends('components.layout')

@section('content')
    <div class="content">
        <h1>Categorien</h1>
    </div>

    <div class="grid-cat-1">
        <a href="/groenten">
        <div class="grid-item-cat-1">
            <img src="{{Vite::asset('resources/backend/assets/img/Groenten.png')}}">
            <div class="overlay-text-cat">Groenten</div>
        </div></a>

    <a href="#">
        <div class="grid-item-cat-1">
            <img src="{{Vite::asset('resources/backend/assets/img/Broden.png')}}">
            <div class="overlay-text-cat">Broden</div>
        </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/bananen.png')}}">
                <div class="overlay-text-cat">Fruit</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/frisdrank.jpg')}}">
                <div class="overlay-text-cat">Frisdrank</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/koffie-thee.png')}}">
                <div class="overlay-text-cat">Koffie en Thee</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/vleeswaren.jpg')}}">
                <div class="overlay-text-cat">Vleeswaren</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/maaltijden.png')}}">
                <div class="overlay-text-cat">Maaltijden</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/snoep.png')}}">
                <div class="overlay-text-cat">Snoep, Koek, Chocola, Chips</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/zuivel.png')}}">
                <div class="overlay-text-cat">Zuivel</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/tandpasta.png')}}">
                <div class="overlay-text-cat">Drogisterij</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/baby.png')}}">
                <div class="overlay-text-cat">Baby en Kind</div>
            </div></a>

        <a href="#">
            <div class="grid-item-cat-1">
                <img src="{{Vite::asset('resources/backend/assets/img/huisdier.png')}}">
                <div class="overlay-text-cat">Huisdieren</div>
            </div></a>

    </div>

@endsection
