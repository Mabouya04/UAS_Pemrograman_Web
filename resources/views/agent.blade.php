@extends('layouts.main')

@section('container')
    @foreach ($agents as $agent)
        <article class="mb-5">
            <h2>
                <a href="/agent/{{ $agent->slug }}">{{ $agent->nama_agent }}</a>
            </h2>
            <h5>Type : {{ $agent->roles }}</h5>
            <p>{!! $agent->excerpt !!}</p>
        </article>
    @endforeach
@endsection