@extends('components.layout')

@section('content')
    <div class="aanbiedingsactie">
        <div class="aanbiedingsactie-item">
            <img src="{{Vite::asset('resources/backend/assets/img/banners/tomaten.png')}}">
            <div class="text-overlay-actie">
                <h1>GROENTEN</h1>
            </div>
        </div>
    </div>

    <div class="grid-product-1">

        {{-- PRODUCT --}}
        <div class="grid-item-product-1">
            <div clas="top">
                <img src="{{Vite::asset('resources/backend/assets/img/broccoli.png')}}">
                1.50
            </div>

            <div class="bottom">
                Product
                Korte omschrijving
            </div>
        </div>

        {{-- PRODUCTOMSCHRIJVING --}}
        <div class="grid-item-product-1">
            <div clas="cat">
                <h4>Subcategorie</h4>
            </div>
        </div>

    </div>

@endsection
