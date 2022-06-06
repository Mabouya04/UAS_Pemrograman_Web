@extends('layouts.main')

@section('container')

<h1>Tipe Senajata : {{ $tipe }}</h1>
<a href="/create-senjata" class="btn btn-success mb-2">Tambah Senjata</a>

    @foreach ($tipes as $tipe_senjata)
    <div class="card mb-3" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $tipe_senjata->link_gambar }}" class="img-fluid rounded-start" alt="{{ $tipe_senjata->nama_senjata }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $tipe_senjata->nama_senjata }}</h5>
          <p class="card-text">{{ $tipe_senjata->name }}</p>
          <p class="card-text">{!! $tipe_senjata->deskripsi_senjata !!}</p>
          <a href="/senjatas/{{ $tipe_senjata->id }}}" class="btn btn-outline-success d-grid">Detail</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach

@endsection