@extends('layouts.main')

@section('container')
    <div class="container bg-light">
        @auth
            <h1>Selamat datang, <span class="text text-primary">{{ auth()->user()->name }}</span></h1>
        @else
            <h1>Selamat datang di web sederhana ini</h1>
        @endauth
    </div>
    
@endsection