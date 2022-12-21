@extends('layouts.app')

@section('content')
<section class="container text-dark py-3">
    <h1>{{$comic->title}}</h1>
    <div class="d-flex align-items-center">
        <img src="{{$comic->thumb }}" alt="">
        <div class="ps-3">
            <h3>{{$comic->series}} - {{$comic->price}}</h3>
            <p>{{$comic->description}}</p>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica</a>
            {{-- <a href="{{route('comics.delete', $comic->id)}}" class="btn btn-danger ms-3">Cancella</a> --}}
        </div>

    </div>

</section>
@endsection