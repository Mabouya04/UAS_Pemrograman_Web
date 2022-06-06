@extends('layouts.main')

@section('container')
@foreach ($data as $map)
<div class="card mb-3" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $map->link_gambar_map }}" class="img-fluid rounded-start" alt="{{ $map->nama_map }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $map->nama_map }}</h5>
          <p class="card-text">{{ $map->link_layout }}</p>
          <p class="card-text">{!! $map->deskripsi_map !!}</p>
          <a href="/map/{{ $map->id }}}" class="btn btn-outline-success d-grid">Detail</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection