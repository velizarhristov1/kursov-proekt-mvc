@extends('layouts.app')

@section('title', 'Продукти')

@section('navigation')
@include('navigation')
@endsection

@section('maincontent')

<div class="container mt-4">
    <h1 class="mb-5 text-center">Продукти</h1>
    <br><br>

        @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{Session::get('success') }}</li>
                </ul>
            </div>
        @endif

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-3">
                <div class="card h-100 p-3">
                    <img src="{{ $product->image }}" class="card-img-top mb-3" alt="{{ $product->name }}" style="max-height: 200px; object-fit: contain;">
                    <div class="card-body d-flex flex-column justify-content-between text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Цена: {{ number_format($product->price, 2) }} лв.</p>
                        
                    </div>
                    <div class="d-flex justify-content-center mt-auto">
                    <a href="{{ route('products.edit', ['product' => $product]) }} " class="btn btn-primary">Промени</a>

                    <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST" onsubmit="return confirm('Сигурни ли сте, че искате да изтриете този продукт?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" value="Изтрий">Изтрий</button>
                    </form>
                    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection

