@extends('layouts.main')

@section('isi')
<div class="bg-primary text-white text-center" style="height: 25rem; padding-top: 6rem;">
  <img class="rounded-circle" style="height: 65%; width: 14%;" src="{{URL('/images/gambar5.jpg')}}">
  <h3>Valentino</h3> 
</div>

<div class="container mt-5">
  <div class="row">
    <div class="text-center text-danger"><h1>Social Media</h1></div>
    <div class="col-sm-6 text-center" style="margin-top: 22px;">
      <a href="https://www.instagram.com/vlentno_/"><img src="{{URL('/images/gambar6.jpg')}}" style="height: 60%; width: 35%"></a>
      <div class="text-center" style="margin-top: 18px;"><h4>Instagram  </h4></div>
    </div>
    <div class="col-sm-6 text-center" style="margin-top: px;">
      <a href="https://www.youtube.com/@motogp"><img src="{{URL('/images/gambar7.jpg')}}" style="height: 65%; width: 50%"></a>
      <div class="text-center"><h4>Youtube</h4></div>
    </div>
    </div>
  </div>
</div>

@endsection


