@extends('layouts.main')

@section('container')

    <a href="/create-agent" class="btn btn-success mb-2">Tambah Agent</a>
    @csrf
    <div class="col-lg-7">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>

    @foreach ($agents as $agent)
    <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $agent->link_agent }}" class="img-fluid rounded-start" alt="{{ $agent->nama_agent }}">
              </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $agent->nama_agent }}</h5>
                <p class="card-text"> Type : <a href="/roles/{{ $agent->role->slug }}" class="text-decoration-none">{{ $agent->role->name }}</a></p>
                <p class="card-text">{!! $agent->body !!}</p>
                <a href="/agent/{{ $agent->id }}" class="btn btn-outline-success d-grid">Detail {{ $agent->nama_agent }}</a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection