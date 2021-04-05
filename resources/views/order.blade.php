@extends('layouts.layout')

@section('title', 'Оформление заказа')

@section('content')
    <div class="wrapper text-center col-md-5">
        <h1>Подтвердите заказ</h1>
        <p>Общая стоимость: 35000 рублей</p>
        <p>Укажите свои имя и телефон, чтобы наш менеджер мог с вами связаться</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="name" class="control-label">Имя: </label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="phone" class="control-label">Телефон: </label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Подтвердить заказ</button>
        </form>
    </div>
@endsection
