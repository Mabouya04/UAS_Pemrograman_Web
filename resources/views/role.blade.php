@extends('layouts.main')

@section('container')
    <h1>AGENT'S ROLES : {{ $role }}</h1>

    @foreach ($agents as $agent)
    <div class="card mb-3" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $agent->link_agent }}" class="img-fluid rounded-start" alt="{{ $agent->nama_agent }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $agent->nama_agent }}</h5>
          <p class="card-text">{!! $agent->body !!}</p>
          <a href="/agent/{{ $agent->id }}}" class="btn btn-outline-success d-grid">Detail {{ $agent->nama_agent }}</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach
@endsection