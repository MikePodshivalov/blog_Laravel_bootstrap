@extends('layouts.master')
@section('title', 'Добавление статьи')
@section('content')
<div class="container justify-content-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('articles') }}" method="post">
        @csrf
        <div class="form-group">
            <h3>Страница добавления статьи</h3>
            <label for="slug">Символьный код</label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" placeholder="Введите символьный код статьи">
            <label for="name">Название статьи</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Введите название статьи">
            <label for="shortName">Краткое описание статьи</label>
            <input type="text" class="form-control" name="shortName" value="{{ old('shortName') }}" placeholder="Введите краткое описание статьи">
            <label for="article">Статья</label>
            <textarea class="form-control" name="article" rows="10">{{ old('article') }}</textarea>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="published"
                    @if(old('published'))
                        checked
                    @endif>
                <label class="form-check-label" for="published">Опубликовать</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <br>
    <a href="{{ route('home') }}">На главную страницу</a>
</div>
@endsection

