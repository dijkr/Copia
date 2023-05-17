@extends('components.layout')

@section('content')
    <div class="content">
        <h1>Welkom bij Copia</h1>
    </div>

    <div class="fullpage">
        <div class="item">
            <h2>Aanbiedingsactie</h2>
            <h3>subkop aanbiedingsactie</h3>
            <a href="#">Aanbieding</a>
        </div>
    </div>

    {{-- ACTIES --}}
    <div class="actie">
    <div class="actie-heading">
        <h1>Actie</h1>
        Tot en met zondag 21 mei
    </div>

    <div class="grid-aanbiedingen-1">
    <a href="#">
        <div class="grid-item-aanbiedingen-1">
            <img src="{{Vite::asset('resources/backend/assets/img/bananen.png')}}">
            <div class="overlay-text-products">Chicuita banenen 5 stuks</div>
        </div>
    </a>

        <a href="#">
            <div class="grid-item-aanbiedingen-1">
                <img src="{{Vite::asset('resources/backend/assets/img/chocola.png')}}">
                <div class="overlay-text-products">Côte d'Or Bonbonbloc melk 200g</div>
            </div>
        </a>

        <a href="#">
            <div class="grid-item-aanbiedingen-1">
                <img src="{{Vite::asset('resources/backend/assets/img/tomaten.png')}}">
                <div class="overlay-text-products">Tomaten 1kg</div>
            </div>
        </a>

        <a href="#">
            <div class="grid-item-aanbiedingen-1">
                <img src="{{Vite::asset('resources/backend/assets/img/kattenvoer.png')}}">
                <div class="overlay-text-products">Kattenvoer</div>
            </div>
        </a>

    </div>
</div>

{{--    <hr>--}}
    <div class="fullpage">
        <div class="item">
            <h2>Nieuwbericht</h2>
            <h3>Korte tekst nieuwsbericht</h3>
            <a href="#">Aanbieding</a>
        </div>
    </div>
{{--    <hr>--}}



    {{--<div class="fullpage">--}}
    {{--    <div class="item">--}}
    {{--        <h2>Huidige aanbiedingsactie</h2>--}}
    {{--        <h3>subkop aanbiedingsactie</h3>--}}
    {{--        <a href="#">Aanbieding</a>--}}
    {{--</div>--}}

    {{--<div class="grid-container-2">--}}
    {{--    <div class="grid-item">Socialmedia</div>--}}
    {{--    <div class="grid-item">Nieuwsbrief aanmelding</div>--}}
    {{--    <div class="grid-item">Klantenservice</div>--}}
    {{--</div>--}}

@endsection


