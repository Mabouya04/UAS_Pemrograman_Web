@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Roles</h1>
    @foreach ($roles as $role)
        <ul>
            <li>
                <h2><a href="/roles/{{ $role->slug }}">{{ $role->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection