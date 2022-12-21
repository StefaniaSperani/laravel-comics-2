@extends('layouts.app')

@section('content')

<section class="container mt-4 text-dark">
    <h1 class="text-center">Modifica: {{$comic->title}}</h1>
    <div class="row">
        <div class="col-12">
            <form action="{{route('comics.update', $comic->id)}}" method="POST" class="p-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{old('description', $comic->description)}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Url Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="weight" name="price" aria-describedby="priceHelp" value="{{old('price', $comic->price)}}" required>
                    <div id="priceHelp" class="form-text">Prezzo espresso in $</div>
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series"  value="{{old('series', $comic->series)}}" required>
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"  value="{{old('sale_date', $comic->sale_date)}}" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select name="type" id="type" required>
                    <option value="comic_book" {{old('type', $comic->type == 'comic_book' ? 'selected' : '')}}>Comic Book</option>
                    <option value="graphic_novel" {{old('type', $comic->type == 'graphic_novel' ? 'selected' : '')}}>Graphic Novel</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
        </form>
    </div>
</div>

</section>
@endsection