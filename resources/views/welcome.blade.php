@extends('layouts.main')

@section('container')
    <div class="container bg-light">
        @auth
        <h1 class="pb-2">Selamat datang, <span class="text text-primary">{{ auth()->user()->name }}</span></h1>   
            
        <div class="col-lg-8 pb-3">
        <ul class="list-group border">
            <li class="list-group-item">Nama : {{ auth()->user()->name }}</li>
            <li class="list-group-item">Username : {{ auth()->user()->username }}</li>
            <li class="list-group-item">Email : {{ auth()->user()->email }}</li>
        </ul>
        </div>

    @else
        <h1>Selamat datang di web sederhana ini</h1>
    @endauth
</div>
    
@endsection