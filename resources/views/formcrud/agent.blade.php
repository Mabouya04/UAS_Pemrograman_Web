@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: 70%">
<div class="row-lg-5 border border-dark rounded bg-light px-3">
  <div class="col">
    <main class="form-registration">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Create Agent</h1>

      <form action="/create-agent" method="post">
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="nama_agent" class="form-control @error('nama_agent')is-invalid @enderror" id="nama_agent" placeholder="nama_agent" value="{{ old('nama_agent') }}">
          <label for="nama_agent">Nama Agent</label>
          @error('nama_agent')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="link_agent" class="form-control @error('link_agent')is-invalid @enderror" id="link_agent" placeholder="link_agent" value="{{ old('link_agent') }}">
          <label for="link_agent">Link agent</label>
          @error('link_agent')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <label for="role_id" class="mb-2">Pilih Jenis Senjata </label><br>
        <select name="role_id" id="role_id" class="mb-2" style="width: 300px; height:50px">
            <option value="">Pilih Role</option>
            @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>


        <div class="mb-2">
          <label for="floatingInput">Deskripsi Agent</label>
          <textarea type="text" name="body" class="form-control @error('body')is-invalid @enderror" id="body" placeholder="Deskripsi senjata" rows="5" cols="20">{{ old('body') }}</textarea>
          @error('body')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-success mb-2" type="submit">Create</button>
      </form>
  </div>
</div>
</div>
@endsection