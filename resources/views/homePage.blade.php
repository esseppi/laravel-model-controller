@extends('templates.base')
@section('main')
    <h1>Qesta è la pagina che lista i libri</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endsection