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
        @foreach($subcategoryData as $subcategoryItem)
        <div class="grid-pd-cat-1">

            {{-- SUBCATEGORY --}}
            <div class="grid-item-products-1">
                <div class="cat">
                    <h4> {{ $subcategoryItem->Subcategory }} </h4>
                </div>
            </div>

             {{-- SUBCATEGORY ITS PRODUCTS --}}
            <a href="{{ '/product/' . $subcategoryItem->slug }}">
                <div class="grid-item-products-1">
                    <div class="top">
                        <img src="{{ '/images/' . $subcategoryItem->Image }}">
                         {{ '€' . ' ' . number_format($subcategoryItem->Price, 2) }}
                    </div>
                    <div class="bottom">
                        {{ $subcategoryItem->Title }}
                        {{ $subcategoryItem->Shortdescription }}
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </div>

@endsection
