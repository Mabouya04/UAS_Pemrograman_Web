@extends('layouts.main')

@section('container')

    <div class="card mb-3 mt-3" style="width: 50rem;">
        <img src="{{ $senjata->link_gambar }}" class="card-img-top img-fluid" alt="{{ $senjata->nama_senjata }}">
        <div class="card-body">
          <h4 class="card-title p-2">Nama Senjata : {{ $senjata->nama_senjata }}</h4>
          <h5 class="card-text p-2">Tipe Senjata : <a href="/tipes/{{ $senjata->TipeSenjata->slug }}" class="text-decoration-none"> {{ $senjata->TipeSenjata->name }}</a>  </h5>
          <div class="card-text container p-2">
            <p>Deskripsi Senjata :</p>
          {!! $senjata->deskripsi_senjata !!}
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="/edit-senjata/{{ $senjata->id }}" class="btn btn-warning d-grid">Edit</a>
            <form action="/senjatas/{{ $senjata->id }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="btn btn-danger text-light" onclick="return confirm('Hapus senjata ?')">Delete</button>
            </form>
            </div>
        </div>
    </div>

    
    
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/senjatas" class="btn btn-outline-warning d-grid mb-5">Back to Weapons</a>
</div>
  
@endsection