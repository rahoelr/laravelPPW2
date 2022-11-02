@extends('layouts.master')

@section('Title','Home')
@section('konten')

<div class="containerAuth">
  <div class="card-body">
      @auth
      <p>Welcome <b>{{ Auth::user()->name }}</b></p>
      <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
      @endauth
      @guest
      <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
      <a class="btn btn-info" href="{{ route('register') }}">Register</a>
      @endguest
  </div>
</div>
<div class="card text-bg-dark m-5">
  <img src="https://assets-global.website-files.com/60bbe7b27107c8b9e196657f/6114453e19d69b471d0eb5fa_zero-03.jpeg" class="card-img" alt="all">
  <div class="card-img-overlay">
    <h1 class="card-title" style="text-align:center;justify-content:center"><strong>Ultras Ultraman</strong></h1>
    <p class="card-text" style="text-align:center;justify-content:center">Semua Ultraman Sudah Berkumpul</p>
    <p class="card-text" style="text-align:center;justify-content:center"><small>Semangat</small></p>
    
  </div>

</div>
</div>
@endsection