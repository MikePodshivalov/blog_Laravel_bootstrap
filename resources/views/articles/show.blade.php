@extends('layouts.master')
@section('title')
    {{ $slug->name }}
@endsection
@section('content')
    <div class="row mb-12 justify-content-center align-items-center">
        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <h3 class="mb-0"> {{ $slug->name }} </h3>
                <div class="mb-1 text-muted">{{ $slug->created_at->format('d-m-Y H:i') }}</div>
                <p class="card-text mb-auto text-justify">{{ $slug->article }}</p>
                <br>
                <a href="{{ route('home') }}">На главную страницу</a>
            </div>
        </div>
    </div>
@endsection
