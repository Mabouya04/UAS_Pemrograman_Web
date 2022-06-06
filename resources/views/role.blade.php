@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Agent Role : {{ $role }}</h1>
    @foreach ($agents as $agent)
        <article class="mb-5">
            <h2>
                <a href="/agent/{{ $agent->slug }}">{{ $agent->nama_agent }}</a>
            </h2>
            <p>{!! $agent->excerpt !!}</p>
        </article>
    @endforeach
@endsection