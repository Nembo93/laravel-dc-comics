@extends('layout')

@section('page_content')
<main>
    <div class="py-3">
        <a class="my_insert_button" href="{{ route('comics.create') }}">Inserisci nuovo fumetto</a>
    </div>   
    <div class="comics_container">
        
        @foreach ($comics as $comic)
            <div class="comic_card">
                <div class="comic_card_img_box">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <h5>{{$comic['series']}}</h5>
                <strong>{{$comic['price']}}</strong>
                <a class="my_show_button" href="{{ route('comics.show', $comic->id) }}">Show details</a>
            </div>        
        @endforeach
    </div>
</main>
@endsection
    