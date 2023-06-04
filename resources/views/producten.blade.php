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

    <div class="grid-products-1">

        {{-- SUBCATEGORY WITH PRODUCTS --}}
        <div class="grid-cat-1">
            <div class="grid-item-products-1">
                <div class="cat">
                    <h4>Subcategorie</h4>
                </div>
            </div>
            @foreach($products as $product)
                <a href="{{ '/product/' . $product->slug }}">
                    <div class="grid-item-products-1">
                        <div clas="top">
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
    </div>

@endsection
