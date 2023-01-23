@extends('layout')
@section('page_content')
    <h1>Inserisci un nuovo fumetto</h1>

    <form action="{{route('comics.store')}}" method="post">
        @csrf        
        <div>
            <label for="title">Inserisci titolo fumetto</label>
            <input type="text" class="@error('title') is-invalid @enderror" id="title" name="title">
        </div>
        <div>
            <label for="series">Inserisci il titolo della serie</label>
            <input type="text" class="@error('series') is-invalid @enderror" id="series" name="series">
        </div>
        <div>
            <label for="thumb">Inserisci l'indirizzo della copertina</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <div>
            <label for="price">Inserisci il prezzo</label>
            <input type="text" class="@error('price') is-invalid @enderror" id="price" name="price">
        </div>
        <div>
            <label for="type">Inserisci tipo di fumetto</label>
            <input type="text" class="@error('type') is-invalid @enderror" id="type" name="type">
        </div>
        <div>
            <label for="sale_date">Inserisci data</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <button type="submit">Salva</button>
    </form>

    @if ($errors->any())
    <div class="alert alert_danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <a href="{{ route('comics.index') }}">Torna ai fumetti</a>
@endsection