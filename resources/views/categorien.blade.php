@extends('components.layout')
@section('content')
    <div class="grid-cat-1">
    @foreach($categories as $category)
            <a href="{{ '/' . $category->slug }}">
                <div class="grid-item-cat-1">
                    <img src="{{ 'images/' . $category->image }}">
                    <div class="overlay-text-cat">{{ $category->name }}</div>
                </div>
            </a>
    @endforeach
    </div>

@endsection
