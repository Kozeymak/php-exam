@extends('layouts.layout')
@section('content')

    <form method="post" action="/thingupdate/{{$things->id}}"> 
        @csrf

        <h1>Изменение вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название" value="{{$things->name}}">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description" value="{{$things->description}}">
            <label for="wrnt">Срок годности</label>
            <input type="text" name="wrnt" id="wrnt" value="{{$things->wrnt}}">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection