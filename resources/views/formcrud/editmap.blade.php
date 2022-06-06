@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: 70%">
<div class="row-lg-5 border border-dark rounded bg-light px-3">
  <div class="col">
    <main class="form-registration">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Edit Map</h1>

      <form action="/edit-map/{{ $map->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="nama_map" class="form-control @error('nama_map')is-invalid @enderror" id="nama_map" placeholder="nama_map" value="{{ old('nama_map' , $map->nama_map) }}">
          <label for="nama_map">Nama Map</label>
          @error('nama_map')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="link_gambar_map" class="form-control @error('link_gambar_map')is-invalid @enderror" id="link_gambar_map" placeholder="link_gambar_map" value="{{ old('link_gambar_map', $map->link_gambar_map) }}">
          <label for="link_gambar_map">Link Gambar Map</label>
          @error('link_gambar_map')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="form-floating mb-2">
            <input type="text" name="link_layout" class="form-control @error('link_layout')is-invalid @enderror" id="link_layout" placeholder="link_layout" value="{{ old('link_layout', $map->link_layout) }}">
            <label for="link_layout">Link Gambar Layout</label>
            @error('link_layout')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <label for="agent_id" class="mb-2">Pilih Related Agent </label><br>
          <select name="agent_id" id="agent_id" class="mb-2" style="width: 300px; height:50px">
            
            <option value="{{ old('agent_id', $map->agent->id) }}">{{ $map->agent->nama_agent }}</option>
              @foreach ($agents as $agent)
              @if ($map->agent_id != $agent->id)
              <option value="{{ $agent->id }}">{{ $agent->nama_agent }}</option>
              @endif
              @endforeach
          </select>  

        <div class="mb-2">
          <label for="floatingInput">Deskripsi Map</label>
          <textarea type="text" name="deskripsi_map" class="form-control @error('deskripsi_map')is-invalid @enderror" id="deskripsi_map" placeholder="Deskripsi map" rows="5" cols="20">{{ old('deskripsi_map', $map->deskripsi_map) }}</textarea>
          @error('deskripsi_map')
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