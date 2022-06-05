@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: 70%">
<div class="row-lg-5 border border-dark rounded bg-light px-3">
  <div class="col">
    <main class="form-registration">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Edit Senjata</h1>

      <form action="/edit-senjata/{{ $senjata->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="nama_senjata" class="form-control @error('nama_senjata')is-invalid @enderror" id="nama_senjata" placeholder="nama_senjata" value="{{ old('nama_senjata' , $senjata->nama_senjata) }}">
          <label for="nama_senjata">Nama Senjata</label>
          @error('nama_senjata')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="link_gambar" class="form-control @error('link_gambar')is-invalid @enderror" id="link_gambar" placeholder="link_gambar" value="{{ old('link_gambar', $senjata ->link_gambar) }}">
          <label for="link_gambar">Link Gambar</label>
          @error('link_gambar')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <label for="tipe_senjata_id" class="mb-2">Pilih Jenis Senjata </label><br>
        <select name="tipe_senjata_id" id="tipe_senjata_id" class="mb-2" style="width: 300px; height:50px">
          
          <option value="{{ old('tipe_senjata_id', $senjata->TipeSenjata->id) }}">{{ $senjata->TipeSenjata->name }}</option>
            @foreach ($tipeSenjata as $tipesenjata)
            @if ($senjata->tipe_senjata_id != $tipesenjata->id)
            <option value="{{ old('tipe_senjata_id', $tipesenjata->id) }}">{{ $tipesenjata->name }}</option>
            @endif
            @endforeach
        </select>


        <div class="mb-2">
          <label for="floatingInput">Deskripsi Senjata</label>
          <textarea type="text" name="deskripsi_senjata" class="form-control @error('deskripsi_senjata')is-invalid @enderror" id="deskripsi_senjata" placeholder="Deskripsi senjata" rows="5" cols="20">{{ old('deskripsi_senjata', $senjata->deskripsi_senjata) }}</textarea>
          @error('deskripsi_senjata')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-warning mb-2" type="submit">Update</button>
      </form>
  </div>
</div>
</div>
@endsection