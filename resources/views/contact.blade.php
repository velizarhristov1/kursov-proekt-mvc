@extends('layouts.app')

@section('title', 'Контакти')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
    
<h1>Свържете се с нас</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    @if (Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{Session::get('success') }}</li>
                </ul>
            </div>
    @endif

    <div class="mb-3">

        @error('name')
        <p class="alert-danger">{{ $errors->first('name') }} </p>
        @enderror

        <label for="name" class="form-label">Имена</label>
        <input type="text" class="form-control" id="name" placeholder="Вашето име" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="mb-3">

        @error('email')
        <p class="alert-danger">{{ $errors->first('email') }} </p>
        @enderror
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" placeholder="Вашият имейл" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="mb-3">
        
        <label for="message" class="form-label">Съобщение</label>
        <textarea class="form-control" id="message" rows="4" name="message" value="{{ old('message') }}" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Изпрати</button>
</form>

<br>
<br>

@endsection('maincontent')

@section('sidebar')
    @include('sidebar')
@endsection('sidebar')