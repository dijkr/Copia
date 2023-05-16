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

        <a href="/productcategorie/6"><div class="grid-item-products-1">Productcategorie 6</div></a>
        <a href="/productcategorie/7"><div class="grid-item-products-1">Productcategorie 7</div></a>
        <a href="/productcategorie/8"><div class="grid-item-products-1">Productcategorie 8</div></a>
        <a href="/productcategorie/9"><div class="grid-item-products-1">Productcategorie 9</div></a>
        <a href="/productcategorie/10"><div class="grid-item-products-1">Productcategorie 10</div></a>
        <a href="/productcategorie/11"><div class="grid-item-products-1">Productcategorie 11</div></a>
        <a href="/productcategorie/12"><div class="grid-item-products-1">Productcategorie 12</div></a>
    </div>

@endsection
