@extends('layouts.main')

@section('container')
    <ul class="list-group">
        @foreach ($roles as $role)
                    
            <li class="list-group-item"><h2><a href="/roles/{{ $role->slug }}" class="link-primary text-decoration-none">{{ $role->name }}</a></h2></li>
                    
        @endforeach
    </ul>
@endsection