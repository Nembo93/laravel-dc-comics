@extends ('layout')

@section('page_content')
<form action="{{ route('comics.update', $comic) }}" method="POST">

    @csrf
    @method('PUT')        
        <div>
            <label for="title">Inserisci titolo fumetto</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="series">Inserisci il titolo della serie</label>
            <input type="text" id="series" name="series">
        </div>
        <div>
            <label for="thumb">Inserisci l'indirizzo della copertina</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <div>
            <label for="price">Inserisci il prezzo</label>
            <input type="text" id="price" name="price">
        </div>
        <div>
            <label for="type">Inserisci tipo di fumetto</label>
            <input type="text" id="type" name="type">
        </div>
        <div>
            <label for="sale_date">Inserisci data</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <button type="submit">Salva le modifiche</button>

</form>
@endsection