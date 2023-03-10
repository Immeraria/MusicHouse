@extends('layouts.app')

@section('content')



<form class="container" action="{{route('catalog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Название товара</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Описание </label>
        <input type="text" class="form-control" id="description" name="description">
    </div>

    <div class="mb-3">
        <label for="brand" class="form-label">Бренд </label>
        <input type="text" class="form-control" id="brand" name="brand">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Цена </label>
        <input type="number" class="form-control" id="price" name="price">
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Колличество </label>
        <input type="number" class="form-control" id="quantity" name="quantity">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Фото</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

@endsection