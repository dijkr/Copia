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

    <div class="grid-products-1">

        <div class="grid-item-products-1">
            <div clas="cat">
                <h4>Subcategorie</h4>
            </div>
        </div>

        <div class="grid-cat-1">
            @foreach($products as $product)
                <a href="{{ '/' . $product->slug }}">
                    <div class="grid-item-products-1">
                        <div clas="top">
                            <img src="{{ 'images/' . $product->Image }}">
                             {{ '€' . ' ' . $product->Price }}
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
