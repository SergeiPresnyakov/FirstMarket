@extends('layouts.layout')

@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-5 mt-3">
                <div class="product__detail" style="background-image: url('{{$product->image}}')"></div>
                <div>
                    <h2>{{ $product->brand }} {{ $product->model }}</h2>
                </div>
                <h4>{{ $product->price }} рублей</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection
