@extends('layouts.app')

@section('content')
<div id="jumbo">
    <button class="series">
        <a href="{{route('comics.index')}}">Current Series</a>
    </button>
</div>
<section id="comics">
    <div class="container">
        <div class="row">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <img src="{{$comic['thumb']}}" alt="" class="mythumb img-fluid">
                    <p>{{$comic['title']}}</p>
                </div>
                @endforeach
        </div>
    </div>
</section>

<section id="merch">
    <div class="container">
        <div>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital">
            </a>
            <span>Digital Comics</span>
        </div>
        <div>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}"" alt="Merch">
            </a>
            <span>Dc Merchandise</span>
        </div>
        <div>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subs">
            </a>
            <span>Subscription</span>
        </div>
        <div>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Shops">
            </a>
            <span>Comic Shop Locator</span>
        </div>
        <div>
            <a href="#">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="Visa">
            </a>
            <span>Dc Power Visa</span>
        </div>
    </div>
</section>
@endsection