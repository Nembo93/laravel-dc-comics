@extends('layout')
@section('page_content')
<div class="show_comic_card">
    <div>
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div>
        {{-- dettagli --}}
        <div>
            <h3>{{$comic['title']}}</h3>
            <h4>{{$comic['series']}}</h4>
            <strong class="disp_block">{{$comic['price']}}€</strong>
            <strong class="disp_block">{{$comic['sale_date']}}</strong>
        </div>
        {{-- bottoni --}}
        <div class="comic_show_button_box">           
            <a class="my_show_button" href="{{ route('comics.index') }}">Torna ai fumetti</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="mybutton_danger">Cancella</button>
            </form>
        </div>
        
    </div>
    
</div>
@endsection



{{-- <button class="info_button"><a href="{{ route('comic_show', $comic->id) }}">Show details</a></button> --}}