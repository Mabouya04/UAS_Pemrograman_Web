@extends('layouts.main')

@section('container')
    <h1>Halaman Agents</h1>
    <h3>{{ $name }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection