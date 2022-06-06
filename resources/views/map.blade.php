@extends('layouts.main')

@section('container')

    <div class="card mb-3 mt-3" style="width: 50rem;">
        <img src="{{ $data->link_gambar_map }}" class="card-img-top img-fluid" alt="{{ $data->nama_map }}">
        <div class="card-body">
          <h4 class="card-title p-2">Nama Map : {{ $data->nama_map }}</h4>
          <h4 class="card-title p-2">Map Layout : </h4>
          <img src="{{ $data->link_layout }}" class="card-img img-fluid" alt="{{ $data->nama_map }}">
          <div class="card-text container p-2">
            <p>Deskripsi Map :</p>
          {!! $data->deskripsi_map !!}
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="/edit-map/{{ $data->id }}" class="btn btn-warning d-grid">Edit</a>
            <form action="/map/{{ $data->id }}" class="d-inline" method="post">
              @method('delete')
              @csrf
              <button class="btn btn-danger text-light" onclick="return confirm('Hapus map ?')">Delete</button>
            </form>
            </div>
        </div>
    </div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/map" class="btn btn-outline-warning d-grid mb-5">Back to Maps</a>
</div>
  
@endsection