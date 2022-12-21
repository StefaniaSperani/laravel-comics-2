@extends('layouts.app')

@section('content')
<section class="container text-dark py-3">
    <div class="container p-3">
        <div class="row">
            <div class="col-6 m-auto"">
                <h2>Inserisci il tuo fumetto</h2>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Immagine</label>
                        <input type="text" class="form-control" name="thumb" id="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Data Vendita</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="type" id="type">
                    </div>
                        <input type="submit" class="btn btn-primary" value="Aggiungi il tuo fumetto!">
                </form>
            </div>
        </div>
    </div>

</section>
@endsection