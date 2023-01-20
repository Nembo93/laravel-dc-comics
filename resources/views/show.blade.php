@extends('layout')
@section('page_content')
<div class="show_comic_card">
    <div>
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div>
        <h3>{{$comic['series']}}</h3>
        <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
    </div>
    
</div>
@endsection



{{-- <button class="info_button"><a href="{{ route('comic_show', $comic->id) }}">Show details</a></button> --}}