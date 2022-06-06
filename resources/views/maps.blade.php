@extends('layouts.main')

@section('container')

  <a href="/create-map" class="btn btn-success mb-2">Tambah Map</a>
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

    @foreach ($data as $map)
      <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ $map->link_gambar_map }}" class="img-fluid rounded-start" alt="{{ $map->nama_map }}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $map->nama_map }}</h5>
              <p class="card-text">{{ $map->agent->nama_agent}}</p>
              <p class="card-text">{!! $map->deskripsi_map !!}</p>
              <a href="/map/{{ $map->id }}}" class="btn btn-outline-success d-grid">Detail</a>
            </div>
          </div>
        </div>
      </div>
@endforeach
@endsection