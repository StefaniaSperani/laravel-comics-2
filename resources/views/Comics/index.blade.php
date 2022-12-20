@extends('layouts.app')

@section('content')
<section class="container">
    <h2 class="text-dark">Vedi nel dettaglio il tuo fumetto preferito!</h2>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
</section>
@endsection