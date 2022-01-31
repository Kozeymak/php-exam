@extends('layouts.layout')
@section('content')

    <form method="post" action="/useupdate/{{$uses->id}}"> 
        @csrf

        <h1>Изменение использования</h1>
        <div>
            <label for="place_id">Идентификатор места</label>
            <input type="number" name="place_id" id="place_id" value="{{$uses->place_id}}">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection