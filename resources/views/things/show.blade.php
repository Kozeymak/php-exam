@extends('layouts.layout')
@section('content')
    <a href="/creatething">Создать вещь</a>
    @foreach($things as $thing)
    <ul>
        <li>Название вещи: {{$thing->name}}</li>
        <li>Описание: {{$thing->description}}</li>
        <li>Срок годности: {{$thing->wrnt}}</li>
        <li>Идентификатор создателя: {{$thing->master}}</li>
    </ul>
    <a href="/deletething/{{$thing->id}}">Удалить вещь</a>
    <a href="/updatething/{{$thing->id}}">Изменить вещь</a>
    @endforeach



@endsection