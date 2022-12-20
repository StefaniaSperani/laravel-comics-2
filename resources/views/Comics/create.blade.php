@extends('layouts.app')

@section('content')
<section class="container text-dark py-3">
    <div class="container p-3">
    <form action="{{ route('comics.store') }}" method="POST" class="d-flex justify-content-center flex-wrap gap-2">
        @csrf
        <div>
            <label for="name">Titolo</label>
            <input type="text" name="title" id="title">
        </div>

        <label for="lastname">Descrizione</label>
        <input type="text" name="description" id="description">

        <label for="name">Immagine</label>
        <input type="text" name="thumb" id="thumb">

        <label for="name">Prezzo</label>
        <input type="text" name="price" id="price">

        <label for="name">Serie</label>
        <input type="text" name="series" id="series">

        <label for="name">Data Vendita</label>
        <input type="text" name="sale_date" id="sale_date">

        <label for="name">Tipo</label>
        <input type="text" name="type" id="type">
        
        <input type="submit" value="Aggiungi il tuo fumetto!">
        </form>
    </div>

</section>
@endsection