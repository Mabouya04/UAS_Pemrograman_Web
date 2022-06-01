@extends('layouts.main')

@section('container')

    <div class="card mb-3 mt-3" style="width: 50rem;">
        <img src="{{ $senjata->Link_Gambar }}" class="card-img-top img-fluid" alt="{{ $senjata->Nama_Senjata }}">
        <div class="card-body">
          <h4 class="card-title p-2">Nama Senjata : {{ $senjata->Nama_Senjata }}</h4>
          <h5 class="card-text p-2">Tipe Senjata :{{ $senjata->Tipe_Senjata }}</h5>
          <div class="card-text container p-2">
            <p>Deskripsi Senjata :</p>
          {!! $senjata->Deskripsi_Senjata !!}
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="/senjatas" class="btn btn-warning d-grid">Edit</a>
            </div>
        </div>
    </div>

    
    
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/senjatas" class="btn btn-outline-warning d-grid">Back to Weapons</a>
</div>
  
@endsection