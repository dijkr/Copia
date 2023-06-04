@extends('components.layout')

@section('content')
    <div class="productbanner">
        <div class="productbanner-item">
            <img src="{{ '/images/banners/' . $category->banner }}">
            <div class="productbanner-text">
                <h1><h1> {{ $category->name }} </h1></h1>
            </div>
        </div>
    </div>

    {{-- PARENT --}}
    <div class="product-parent">

        {{-- BOX --}}
        <div class="product-box">
            <div class="left">
                <img src="{{ '/images/' . $product->Image }}">
            </div>

            <div class="middle">
                <h3> {{ $product->Title }} </h3>
                {{ '€' . ' ' . number_format($product->Price, 2) }}
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
