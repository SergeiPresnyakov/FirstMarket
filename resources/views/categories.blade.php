@extends('layouts.layout')

@section('title', 'Категории')

@section('content')

<div class="row wrapper">

    @foreach($categories as $category)
        <div class="text-center">
            <div class="product__image small" style="background-image: url('{{ $category->image }}')"></div>
        <h2><a class="link-primary text-decoration-none" href="{{ route('category_products', $category->id) }}">{{ $category->name }}</a> {{ $category->products->count() }}</h2>
        <p>{{ $category->description }}</p>
        <hr>
        </div>
    @endforeach

</div>

@endsection
