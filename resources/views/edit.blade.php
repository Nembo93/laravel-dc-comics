@extends ('layout')

@section('page_content')
<form action="{{ route('comics.update', $comic) }}" method="POST">

    @csrf
    @method('PUT')        
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
            <input type="number" class="@error('price') is-invalid @enderror" id="price" name="price">
        </div>
        <div>
            <label for="type">Inserisci tipo di fumetto</label>
            <input type="text" class="@error('type') is-invalid @enderror" id="type" name="type">
        </div>
        <div>
            <label for="sale_date">Inserisci data</label>
            <input type="date" class="@error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date">
        </div>
        <button type="submit">Salva le modifiche</button>

</form>
@endsection