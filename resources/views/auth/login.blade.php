@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="login-card card">
    <div class="card-header fw-bold">
      Requestor Login
    </div>
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="userid" class="form-label">User ID</label>
          <input type="text" class="form-control" id="userid">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
          <a href="#">Forgot Password?</a>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-success">Log In</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection