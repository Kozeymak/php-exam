@extends('layouts.layout')
@section('content')

    <form method="post" action="/thinggive"> 
        @csrf

        <h1>Передача вещи</h1>
        <div>
            <label for="thing_id">Идентификатор вещи</label>
            <input type="number" name="thing_id" id="thing_id">
            <label for="to_id">Идентификатор пользователя, кому передается вещь</label>
            <input type="number" name="to_id" id="to_id">
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection