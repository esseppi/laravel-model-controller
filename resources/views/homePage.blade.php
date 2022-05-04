@extends('templates.base')
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
{{-- <style>
.container {
    margin: auto;
    width: 85%;
    display: flex;
    justify-content: space-between;

}
.card {
    background-color: lightblue;
}
</style> --}}