@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: 70%">
<div class="row-lg-5 border border-dark rounded bg-light px-3">
  <div class="col">
    <main class="form-registration">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Registration Form</h1>

      <form action="/register" method="post">
        @csrf
        <div class="form-floating mb-2">
          <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Register</button>
      </form>
      <small class="d-block text-center mb-5">Already Registered? 
        <a href="/login"> Login</a></small>
    </main>
  </div>
</div>
</div>
@endsection