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
            <form action="{{route('comics.destroy', $comic->id)}}" onsubmit="javascript:return window.confirm('Sicuro sicuroooo????');"
                method="POST" class="d-inline">
                @csrf
                @method('DELETE')

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cancella
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler cancellare?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Se lo cancelli, perderai i dati!
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-danger">Cancella</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            
        </div>

    </div>

</section>
@endsection