@extends('layouts.main')

@section('container')

    <a href="/create-senjata" class="btn btn-success mb-2">Tambah Senjata</a>
    @csrf
    @foreach ($senjatas as $senjata)
    <div class="card mb-3" style="max-width: 700px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $senjata->link_gambar }}" class="img-fluid rounded-start" alt="{{ $senjata->nama_senjata }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $senjata->nama_senjata }}</h5>
          <p class="card-text">{{ $senjata->TipeSenjata->name }}</p>
          <p class="card-text">{!! $senjata->deskripsi_senjata !!}</p>
          <a href="/senjatas/{{ $senjata->id }}}" class="btn btn-outline-success d-grid">Detail</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach

@endsection