@extends('layouts.main')

@section('container')
<div class="container-fluid" style="width: fit-content">
  @if (session()->has('success'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
<div class="row border border-dark rounded bg-light">
  <div class="col" style="width: 500px">
    <main class="form">
      <h1 class="h3 mb-3 mt-4 fw-normal text-center ">Please Login</h1>
      <form>
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
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