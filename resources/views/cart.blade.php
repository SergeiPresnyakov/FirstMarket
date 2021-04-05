@extends('layouts.layout')

@section('title', 'Корзина товаров')

@section('content')
<div class="wrapper text-center">
    <h1>Корзина</h1>
    <p>Оформление заказа</p>

    <table class="table table-striped">
        <thead>
            <th scope="col">Название</th>
            <th scope="col">Количество</th>
            <th scope="col">Цена</th>
            <th scope="col">Стоимость</th>
        </thead>
        <tbody>
            <tr>
                <td>Samsung Galaxy S9</td>
                <td>
                    <button class="btn btn-danger">-</button>
                    <span class="badge bg-info rounded-pill text-dark">1</span>
                    <button class="btn btn-success">+</button>
                </td>
                <td>35000 руб</td>
                <td>35000 руб</td>
            </tr>
            <tr>
                <td>Общая стоимость</td>
                <td></td>
                <td></td>
                <td>35000 руб</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-end">
    <button class="btn btn-success">Оформить заказ</button>
</div>

@endsection
