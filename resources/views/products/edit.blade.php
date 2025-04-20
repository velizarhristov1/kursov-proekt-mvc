@extends('layouts.app')

@section('title', 'Промяна на продукт')

@section('navigation')
@include('navigation')
@endsection

@section('maincontent')

<div class="container mt-4">
    <h1 class="mb-5 text-center">Промяна на продукт</h1>

    <div class="">
    <a href="{{ route('products.index') }} " class="btn btn-info">Обратно</a>
    </div>

        @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{Session::get('success') }}</li>
                </ul>
            </div>
        @endif

    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Име на продукта</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            

            @if ($product->image)
                <p>Текущо изображение:</p>
                <img src="{{ $product->image }}" alt="Текущо изображение" style="max-height: 150px;">
            @endif


            <input type="file" class="card-img-top mb-3" id="image" name="image" style="max-height: 200px; object-fit: contain;">
        </div>
        <button type="submit" class="btn btn-primary">Запази промените</button>
    </form>
</div>

@endsection
