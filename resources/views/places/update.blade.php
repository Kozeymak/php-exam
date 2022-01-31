@extends('layouts.layout')
@section('content')

    <form method="post" action="/placeupdate/{{$places->id}}"> 
        @csrf

        <h1>Изменение вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название" value="{{$places->name}}">
            <label for="description">Описание</label>
            <input type="text" name="description" id="description" value="{{$places->description}}">
            <label for="repair">На починке</label>
            <input type="boolean" name="repair" id="repair" value="{{$places->repair}}">
            <label for="work">В работе</label>
            <input type="boolean" name="work" id="work" value="{{$places->work}}">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection