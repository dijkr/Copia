@extends('components.layout')

@section('content')
    <div class="productbanner">
        <div class="productbanner-item">
            <img src="{{ '/images/banners/' . $category->banner }}">
            <div class="productbanner-text">
                <h1> {{ $category->name }} </h1>
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
                <p>{{ $product->Shortdescription }}</p>
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
                {{ $product->Fulldescription }}
            </div>
        </div>

    </div>

@endsection
