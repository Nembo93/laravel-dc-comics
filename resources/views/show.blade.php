@extends('layout')
@section('page_content')
<div>
    <div>
        <img src="{{$comics['thumb']}}" alt="">
    </div>
</div>
@endsection



{{-- <button class="info_button"><a href="{{ route('comic_show', $comic->id) }}">Show details</a></button> --}}