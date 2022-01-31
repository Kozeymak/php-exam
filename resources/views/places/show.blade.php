@extends('layouts.layout')
@section('content')
    <a href="/createplace">Создать место</a>
    @foreach($places as $place)
    <ul>
        <li>Название места: {{$place->name}}</li>
        <li>Описание: {{$place->description}}</li>
        <li>На починке: {{$place->repair}}</li>
        <li>В работе: {{$place->work}}</li>
        <li>Идентификатор места: {{$place->id}}</li>
    </ul>
    <a href="/deleteplace/{{$place->id}}">Удалить место</a>
    <a href="/updateplace/{{$place->id}}">Изменить место</a>
    @endforeach



@endsection