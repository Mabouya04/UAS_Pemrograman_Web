@extends('layouts.main')

@section('container')
<div class="card mb-3 mt-3" style="width: 50rem;">
    <img src="{{ $agent->link_agent }}" class="img-fluid rounded-start" width="400" alt="{{ $agent->nama_agent }}">
    <div class="card-body">
      <h4 class="card-title p-2">{{ $agent->nama_agent }}</h4>
      <h5 class="card-text p-2">Type <a href="/roles/{{ $agent->role->slug }}" class="text-decoration-none"> {{ $agent->role->name }}</a></h5>
      <div class="card-text container p-2">
        <p>About Agent :</p>
      {!! $agent->body !!}
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
        <a href="/edit-agent/{{ $agent->id }}" class="btn btn-warning d-grid">Edit</a>
        <form action="/agent/{{ $agent->id }}" class="d-inline" method="post">
          @method('delete')
          @csrf
          <button class="btn btn-danger text-light" onclick="return confirm('Hapus Agent ?')">Delete</button>
        </form>
      </div>
    </div>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a href="/agent" class="btn btn-outline-warning d-grid mb-5">Back to Agent</a>
</div>
@endsection