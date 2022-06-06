@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: 70%">
<div class="row-lg-5 border border-dark rounded bg-light px-3">
  <div class="col">
    <main class="form-registration">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Edit Agent</h1>

      <form action="/edit-agent/{{ $agent->id }}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="nama_agent" class="form-control @error('nama_agent')is-invalid @enderror" id="nama_agent" placeholder="nama_agent" value="{{ old('nama_agent' , $agent->nama_agent) }}">
          <label for="nama_agent">Nama Agent</label>
          @error('nama_agent')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="link_agent" class="form-control @error('link_agent')is-invalid @enderror" id="link_agent" placeholder="link_agent" value="{{ old('link_agent', $agent ->link_agent) }}">
          <label for="link_agent">Link Gambar Agent</label>
          @error('link_agent')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <label for="role_id" class="mb-2">Pilih Role </label><br>
        <select name="role_id" id="role_id" class="mb-2" style="width: 300px; height:50px">
          
          <option value="{{ old('role_id', $agent->role->id) }}">{{ $agent->role->name }}</option>
            @foreach ($roles as $role)
            @if ($agent->role_id != $role->id)
            <option value="{{ old('role_id', $role->id) }}">{{ $role->name }}</option>
            @endif
            @endforeach
        </select>


        <div class="mb-2">
          <label for="floatingInput">Deskripsi Agent</label>
          <textarea type="text" name="body" class="form-control @error('body')is-invalid @enderror" id="body" placeholder="Deskripsi Agent" rows="5" cols="20">{{ old('body', $agent->body) }}</textarea>
          @error('body')
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