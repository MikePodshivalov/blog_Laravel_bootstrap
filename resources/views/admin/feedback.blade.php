@extends('layouts.master')
@section('title', 'Админ. раздел')
@section('content')
    <h3>Административный раздел</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Сообщение</th>
                <th scope="col">Дата получения</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
