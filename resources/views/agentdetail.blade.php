@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $agent["name"] }}</h2>
        <h5>{{ $agent["roles"] }}</h5>
        <p>{{ $agent["body"] }}</p>
    </article>

    <a href="/agent">Back to Agent</a>
@endsection