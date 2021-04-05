@extends('layouts.layout')

@section('title', 'Детали товара')

@section('content')
<div class="wrapper row">
    <div class="product__detail" style="background-image: url('{{$product->image}}')"></div>
    <div>
        <h2>{{ $product->brand }} {{ $product->model }}</h2>
    </div>
    <h4>{{ $product->price }} рублей</h4>
    <p>{{ $product->description }}</p>
    <a href="#" class="btn btn-primary">В корзину</a>
</div>
@endsection
