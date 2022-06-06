@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="p-6">
        REGISTER
    </div>
    <form action="{{route('register')}}" method="post">
        @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required value="{{old('name')}}">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required value="{{old('name')}}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required value="{{old('email')}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection


