@extends('layouts.app')

@section('title', 'Вход')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4 text-center">Вход</h2>


            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif


            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Имейл:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" id="email" value="{{ old('email') }}" placeholder="Въведете имейл">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Парола:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" id="password" placeholder="Въведете парола">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Вход</button>
                </div>

                <p class="mt-3 text-center">Нямате акаунт? <a href="{{ route('register') }}">Регистрирайте се</a>.</p>

            </form>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
