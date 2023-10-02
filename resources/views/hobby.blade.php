@extends('layouts.main')

@section('isi')
<div class="container mt-5">
  <div class="row">
    <div class="text-center text-danger"><h1>List Of My Hobby</h1></div>
    <div class="col-sm-4">
      <img style="height: 100%; width: 100%;" src="{{URL('/images/gambar2.jpg')}}">
      <div class="text-center"><h4>Balapan</h4></div>
    </div>
    <div class="col-sm-4" style="margin-top: 22px;">
      <img style="height: 92%; width: 100%" src="{{URL('/images/gambar3.jpg')}}">
      <div class="text-center"><h4>Main Game</h4></div>
    </div>
    <div class="col-sm-4" style="margin-top: 22px;">
      <img style="height: 92%; width: 100%;" src="{{URL('/images/gambar4.jpg')}}">
      <div class="text-center"><h4 style="margin-bottom: 28px;">Main Bola</h4></div>
    </div>
    </div>
  </div>
</div>

@endsection


