@extends('layouts.master')
@section('title', 'Главная')
@section('content')
    @foreach($articlesPublished as $article)
        <div class="row mb-12">
            <div class="col-md-12">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0"> {{ $article->name }} </h3>
                        <div class="mb-1 text-muted">{{ $article->created_at->format('d-m-Y H:i') }}</div>
                        <p class="card-text mb-auto">{{ $article->shortName }}</p>
                        <a href="{{ route('articles.show', $article) }}">Продолжить чтение статьи</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

