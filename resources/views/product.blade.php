@extends('components.layout')

@section('content')
    <div class="productbanner">
        <div class="productbanner-item">
            <img src="{{Vite::asset('resources/backend/assets/img/banners/tomaten.png')}}">
            <div class="productbanner-text">
                <h1>GROENTEN</h1>
            </div>
        </div>
    </div>

    {{-- PARENT --}}
    <div class="product-parent">

        {{-- BOX --}}
        <div class="product-box">
            <div class="left">
                <img src="{{Vite::asset('resources/backend/assets/img/broccoli.png')}}">
            </div>

            <div class="middle">
                <h3>Product</h3>
                <p>1.50 EUR</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="right">
                <a href="#">Voeg toe</a>
            </div>
        </div>

        {{-- PRODUCTOMSCHRIJVING-KOP --}}
        <div class="titel">
            <h4>Productomschrijving</h4>
        </div>

        {{-- PRODUCTOMSCHRIJVING --}}
        <div class="product-box-omschrijving">
            <div class="cat">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?
            </div>
        </div>

    </div>

@endsection
