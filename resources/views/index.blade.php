
@extends('layouts.layout')

@section('title', 'Каталог товаров')

@section('content')
<div class="wrapper">
        <h2 class="text-center">Каталог</h2>
        <div class="row product_card_head d-flex justify-content-evenly">

        @foreach($products as $product)
            <div class="card by-4 mt-3">
                <div class="card-header">
                    <h5 class="card-title product__brand">{{ $product->brand }}</h5>
                    <h6 class="card-title product__model">{{ $product->model }}</h6>
                    <p class="card-title product__category_name">{{ $product->category->name }}</p>
                </div>
                <div class="card-body">
                    <div class="product__image" style="background-image: url('{{$product->image}}')"></div>
                    <div class="card-body">
                        <p>{{$product->price}} рублей</p>
                    <p class="product__desc">{{ Str::limit($product->description, 100, '...') }}</p>
                    <div class="product__buttons">
                        <a href="{{ route('show', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-primary">Details</a>
                        <a href="#" class="btn btn-sm btn-primary">Add to cart</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

        {{-- pagination --}}
        <div class="mt-3 d-flex justify-content-center">
            {{ $products->links() }}
        </div>

    </div>


@endsection

