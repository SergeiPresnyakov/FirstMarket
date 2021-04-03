
@extends('layouts.layout')

@section('content')
    <h2 class="text-center mt-3">Catalog</h2>

    <div class="container wrapper">
        <div class="row">

        @foreach($products as $product)
            <div class="card by-4 product">
                <div class="card-header">
                    <h5 class="card-title product__brand">{{ $product->brand }}</h5>
                    <h6 class="card-title product__model">{{ $product->model }}</h6>
                </div>
                <div class="card-body">
                    <div class="product__image" style="background-image: url('{{$product->image}}')"></div>
                    <div class="card-body">
                    <p class="product__desc">{{ Str::limit($product->description, 100, '...') }}</p>
                    <div class="product__buttons">
                        <a href="#" class="btn btn-sm btn-outline-primary">Details</a>
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

