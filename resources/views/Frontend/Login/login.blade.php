@extends('Frontend.layouts.header')
@section('content')
 <div class="card">
 <form method="post" action="{{route('login-user')}}">
@csrf
         <h4>Login</h4><br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" style="margin-left: 130px;" class="btn btn-primary">Submit</button>
         </form>
    <h1> <a href="{{ route('signup') }}">Don't have a account? click</a></h1>
 </div>
@endsection