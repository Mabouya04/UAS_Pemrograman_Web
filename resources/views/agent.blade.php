@extends('layouts.main')

@section('container')
    @foreach ($agents as $agent)
        <article class="mb-5">
            <h2>
                <a href="/agent/{{ $agent["slug"] }}">{{ $agent["name"] }}</a>
            </h2>
            <h5>Type : {{ $agent["roles"] }}</h5>
            <p>{{ $agent["body"] }}</p>
        </article>
    @endforeach
@endsection