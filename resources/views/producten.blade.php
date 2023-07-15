@extends('components.layout')

@section('content')

    <div class="productbanner">
        <div class="productbanner-item">
            <img src="{{ '/images/banners/' . $categoryData->banner }}">
            <div class="productbanner-text">
                <h1> {{ $categoryData->name }} </h1>
            </div>
        </div>
    </div>

    <div class="grid-products-1">

        {{-- SHOW THE SUBCATEGORY AND ITS PRODUCTS --}}
        @foreach ($groupedProducts as $groupedProduct => $products)
        <div class="grid-pd-cat-1">
            {{-- SHOW THE SUBCATEGORY --}}
            @php
                // The resulting key of the array = JSON
                $subcategory = json_decode($groupedProduct, true);
            @endphp
            <div class="grid-item-products-1">
                <div class="cat">
                    <h4> {{ $subcategory['name'] }} </h4>
                </div>
            </div>

             {{-- SHOW THE SUBCATEGORY ITS PRODUCTS --}}
            @foreach ($products as $product)
            <a href="{{ '/product/' . $product->slug }}">
                <div class="grid-item-products-1">
                    <div class="top">
                        <img src="{{ '/images/' . $product->Image }}">
                         {{ '€' . ' ' . number_format($product->Price, 2) }}
                    </div>
                    <div class="bottom">
                        {{ $product->Title }}
                        {{ $product->Shortdescription }}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>

@endsection
