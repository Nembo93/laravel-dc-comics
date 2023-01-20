@extends('layout')

@section('page_content')
<main class="bg-light">
    <h1>Questa è la view index</h1>

    <div class="comics_container">
        
        @foreach ($comics as $comic)
            <div class="comic_card">
                <div class="comic_card_img_box">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h5>{{$comic['series']}}</h5>
                <strong>{{$comic['price']}}</strong>
                <button class="info_button"><a href="{{ route('comics.show', $comic->id) }}">Show details</a></button>
            </div>        
        @endforeach
    </div>
</main>
@endsection
    