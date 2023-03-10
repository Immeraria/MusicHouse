@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Гитара со струнами басс ультрахардбасс китай розовый взорслый</h1>

    <div class="row">
        <div class="col">
            <img class="w-100" src="{{ asset('storage/image/products/'.$product->image) }}" alt="{{ $product->image }}">
        </div>
        <div class="col align-items-center">
            <h3 class="my-4">{{ $product->brand }}</h3>
            <p class="my-3">{{ $product->description }}</p>
            <h2 class="my-3">{{ $product->price }}</h2>
            <p class="my-3">Доставка по Тюменской области</p>
            <div class="my-3">
                <button class="btn btn-dark">
                    В корзину
                </button>
                <button class="btn btn-success">
                    Купить сейчас
                </button>
            </div>
            <p>Осталось {{ $product->quantity }} штук</p>
        </div>
    </div>
</div>




@endsection