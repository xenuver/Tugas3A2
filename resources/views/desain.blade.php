@extends('layouts.main')

@section('isi')
<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand pr-1" href="{{url('/')}}"><img src="images/tokpedlogo.svg" style="margin-left: 2rem; height:80%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar" style="padding-top: 1rem;">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link fw-bold" style="margin-left: 1rem;" href="#">Kategori</a>
        </li>
        <li class="nav-item">
          <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" style="padding-right: 30rem;margin-left: 2rem;" placeholder="Cari di Tokopedia" />
              <label class="form-label" for="form1"  ></label>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class=""><button class="btn btn-light fw-bold" type="button" style="margin-right: 1rem;margin-left:7rem;border: 1px solid #00AA5B; color:#00AA5B;">MASUK</button></a>
        </li>
        <li class="nav-item">
          <a href="#" class=""><button class="btn btn-light fw-bold" type="button" style="margin-right: 1rem;background-color: #00AA5B; color:white;">DAFTAR</button></a>
        </li>
      </ul>
      <form class="d-flex">    
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="slideshow">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item active">
              <img src="images/banner2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item active">
            <img src="images/banner3.jpg" class="d-block w-100">
        </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">❮</a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">></a>
    </div>
  </div>

  <h3 class="mt-4 mb-4">Barang Terlaris</h3>

  <div class="row"> 
      <div class="col-12 col-lg-3 mr-2">
          <a class="text-dark"  href="#" style="text-decoration: none;">
          <div class="card mb-4" style="width: 16rem;">
              <img src="images/barang1.jpg" class="card-img-top">
              <div class="card-body">
                  <P class="card-title crop-text-2">New Balance 574</P>
                  <p class="card-text fw-bold fs-6">Rp. 1,500,000</p>
                  <p class="card-text">Terjual 4</p>
              </div>
          </div>
          </a>
      </div>
      <div class="col-12 col-lg-3 mr-2">
        <a class="text-dark"  href="#" style="text-decoration: none;">
        <div class="card mb-4" style="width: 16rem;">
            <img src="images/barang1.jpg" class="card-img-top">
            <div class="card-body">
                <P class="card-title crop-text-2">New Balance 574</P>
                <p class="card-text fw-bold fs-6">Rp. 1,500,000</p>
                <p class="card-text">Terjual 4</p>
            </div>
        </div>
        </a>
    </div>
    <div class="col-12 col-lg-3 mr-2">
      <a class="text-dark"  href="#" style="text-decoration: none;">
      <div class="card mb-4" style="width: 16rem;">
          <img src="images/barang1.jpg" class="card-img-top">
          <div class="card-body">
              <P class="card-title crop-text-2">New Balance 574</P>
              <p class="card-text fw-bold fs-6">Rp. 1,500,000</p>
              <p class="card-text">Terjual 4</p>
          </div>
      </div>
      </a>
  </div>
  <div class="col-12 col-lg-3 mr-2">
    <a class="text-dark"  href="#" style="text-decoration: none;">
    <div class="card mb-4" style="width: 16rem;">
        <img src="images/barang1.jpg" class="card-img-top">
        <div class="card-body">
            <P class="card-title crop-text-2">New Balance 574</P>
            <p class="card-text fw-bold fs-6">Rp. 1,500,000</p>
            <p class="card-text">Terjual 4</p>
        </div>
    </div>
    </a>
  </div>
</div>

@endsection


