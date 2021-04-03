@extends('layouts.layout')

@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-8 mt-3">
                <img src="{{ $product->image }}" class="img-fluid img-thumbnail" alt="{{ $product->brand }} {{ $product->model }}">
                <div>
                    <h2>{{ $product->brand }} {{ $product->model }}</h2>
                </div>
                <h4>{{ $product->price }} рублей</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection
