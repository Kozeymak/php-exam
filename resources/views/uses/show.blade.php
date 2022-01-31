@extends('layouts.layout')
@section('content')
    <a href="/givething">Передать вещь</a>
    @foreach($uses as $use)
    <ul>
        <li>Идентификатор вещи: {{$use->thing_id}}</li>
        <li>Идентификатор места: {{$use->place_id}}</li>
        <li>Идентификатор пользователя: {{$use->user_id}}</li>
        <li>Количество вещей: {{$use->amount}}</li>
    </ul>
    <a href="/updateuse/{{$use->id}}">Изменить использование</a>
    @endforeach



@endsection