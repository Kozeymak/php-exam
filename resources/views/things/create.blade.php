@extends('layouts.layout')
@section('content')

    <form method="post" action="/thing"> 
        @csrf

        <h1>Создание вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description">
            <label for="wrnt">Срок годности</label>
            <input type="text" name="wrnt" id="wrnt">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection