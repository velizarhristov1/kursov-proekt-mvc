@extends('layouts.app')

@section('title', 'Home')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
    @include('home')
@endsection('maincontent')

@section('sidebar')
    @include('sidebar')
@endsection('sidebar')