@extends('layouts.main')

@section('container')

    <ul class="list-group">
    @foreach ($tipeSenjatas as $tipe)
                
        <li class="list-group-item"><h2><a href="/tipes/{{ $tipe->slug }}" class="link-primary text-decoration-none">{{ $tipe->name }}</a></h2></li>
                
    @endforeach
    </ul>

@endsection