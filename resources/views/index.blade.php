@extends('layout')

@section('page_content')
<main class="bg-light">
    <h1>Questa è la view index</h1>
    @foreach ($comics as $comic)
        <h2>{{$comic['series']}}</h2>
    @endforeach
</main>
@endsection
    