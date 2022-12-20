@extends('layouts.app')

@section('content')
<section class="container">
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
</section>
@endsection