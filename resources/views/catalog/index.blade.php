@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="container">
        <h1 class="py-4">Каталог</h1>

        <div class=" p-0 d-flex flex-wrap justify-content-between">

        @if(isset($products))

        @foreach($products as $product)

            <div class="card my-3 align-items-center" style="width: 18rem;">

                <img src="{{ asset('storage/image/products/'.$product->image) }}" style="width: 250px; height:250px;" class="card-img-top my-2" alt="">

                <div class="card-body">

                    <h5 class="card-title"><a href="{{ route('catalog.show', $product->id) }}">{{ $product->title }}</a></h5>

                    <p class="card-text"> {{ $product->price }} руб. </p>

                </div>

            </div>

        @endforeach

        @endif

        </div>
    </div>
</div>

@endsection