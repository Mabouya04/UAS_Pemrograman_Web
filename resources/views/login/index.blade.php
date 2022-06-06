@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: fit-content">
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
<div class="row border border-dark rounded bg-light">
  <div class="col" style="width: 500px">
    <main class="form">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus value="{{ old('username') }}" required>
          <label for="floatingInput">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mb-5">Not registered? 
        <a href="/register"> Register Now!</a></small>
    </main>
  </div>
</div>
</div>
@endsection