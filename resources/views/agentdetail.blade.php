@extends('layouts.main')

@section('container')
    <h2>{{ $agent->nama_agent }}</h2>
    
    <p>Type : <a href="/roles/{{ $agent->role->slug }}">{{ $agent->role->name }}</a></p>
        
    {!! $agent->body !!}

    <a href="/agent">Back to Agent</a>
@endsection