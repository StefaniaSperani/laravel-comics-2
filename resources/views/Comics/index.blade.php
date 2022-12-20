@extends('layouts.app')

@section('content')
<section class="container">
    <h2 class="text-dark">Vedi nel dettaglio il tuo fumetto preferito!</h2>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
    <button type="button" class="btn btn-primary my-2"><a href="{{route('comics.create')}}" class="text-white text-decoration-none">Invia il tuo fumetto!</a></button>
</section>
@endsection