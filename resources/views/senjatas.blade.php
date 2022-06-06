@extends('layouts.main')

@section('container')

    <a href="/create-senjata" class="btn btn-success mb-2">Tambah Senjata</a>
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