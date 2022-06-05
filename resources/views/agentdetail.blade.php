@extends('layouts.main')

@section('container')
    <h2>{{ $agent->nama_agent }}</h2>
    <h5>{{ $agent->roles }}</h5>
        
    {!! $agent->body !!}

    <a href="/agent">Back to Agent</a>
@endsection