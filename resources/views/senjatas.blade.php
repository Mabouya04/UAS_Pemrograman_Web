@extends('layouts.main')

@section('container')

    <a href="" class="btn btn-success mb-2">Tambah Senjata</a>

    @foreach ($senjatas as $senjata)
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $senjata->Link_Gambar }}" class="img-fluid rounded-start" alt="{{ $senjata->Nama_Senjata }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $senjata->Nama_Senjata }}</h5>
          <p class="card-text">{{ $senjata->Tipe_Senjata }}</p>
          <p class="card-text">{{ $senjata->Deskripsi_Senjata }}</p>
          <a href="/senjatas/{{ $senjata->id }}}" class="btn btn-outline-success d-grid">Detail</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach

@endsection