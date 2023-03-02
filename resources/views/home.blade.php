@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <h1 class="py-4">Главная</h1>

                <div id="carouselExampleFade" class="carousel slide carousel-fade overflow-hidden">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/212103.jpg" class="d-block w-100" alt="/images/212103.jpg" height="720">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/]e]e].jpg" class="d-block w-100" alt="/images/212103.jpg" height="720">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection