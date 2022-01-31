@extends('layouts.layout')
@section('content')

    <form method="post" action="/place"> 
        @csrf

        <h1>Создание места</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection