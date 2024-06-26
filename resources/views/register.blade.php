@extends('master')
@section("content")
<div class="container custom-login py-5">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <form action="register" method="post"> 
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name"> 
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>
    </div>
</div>
@endsection