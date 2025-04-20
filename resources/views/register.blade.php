@extends('layouts.app')

@section('title', 'Регистрация')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="mb-4 text-center">Регистрация</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Име:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" id="name" value="{{ old('name') }}" placeholder="Въведете име">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

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

                <div class="mb-3">
                    <label for="psw-repeat" class="form-label">Повторете паролата:</label>
                    <input type="password" class="form-control @error('psw-repeat') is-invalid @enderror"
                           name="psw-repeat" id="psw-repeat" placeholder="Повторете паролата">
                    @error('psw-repeat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Регистрирай се</button>
                </div>

                <p class="mt-3 text-center">Имате акаунт? <a href="{{ route('login') }}">Влезте тук</a>.</p>

            </form>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection
