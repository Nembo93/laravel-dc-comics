@extends('layout')
@section('page_content')
<div>
    <div>
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <h3>{{$comic['series']}}</h3>
    <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
</div>
@endsection



{{-- <button class="info_button"><a href="{{ route('comic_show', $comic->id) }}">Show details</a></button> --}}