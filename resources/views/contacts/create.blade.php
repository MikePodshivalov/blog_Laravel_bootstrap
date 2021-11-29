@extends('layouts.master')
@section('title', 'Контакты')
@section('content')
    <form action="{{ route('contacts') }}" method="post">
        @csrf
        <div class="form-group">
            <h3>Страница обратной связи</h3>
            <label for="slug">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Введите email">
            <label for="name">Сообщение</label>
            <input type="text" class="form-control" name="message" value="{{ old('message') }}" placeholder="Введите сообщение">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <br>
    <a href="{{ route('home') }}">На главную страницу</a>
@endsection

