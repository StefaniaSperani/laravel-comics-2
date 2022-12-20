@extends('layouts.app')

@section('content')
<section class="container text-dark py-3">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="name">Titolo</label>
        <input type="text" name="title" id="title">

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
        
        <input type="submit" value="Invia">
        </form>

</section>
@endsection