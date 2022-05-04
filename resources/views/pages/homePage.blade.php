@extends('templates.base')
@section('css', './css/app.css')
@section('main')
<div class="container">
    @foreach ($movies as $movie)
    <div class="card">
        <div class="title">
            {{ $movie->title }}
        </div>
        <div class="country">
            {{ $movie->nationality }}
        </div>
        <div class="date">
          {{ $movie->date }}
        </div>
        <div class="vote">
            {{ $movie->vote }}
        </div>
    </div>
    @endforeach
</div>
@endsection
