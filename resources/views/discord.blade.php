@extends('layouts.main')

@section('isi')
<body style="background-color:#404eed">
  

<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand pr-1" href="{{url('/')}}"><img src="images/discord.png" style="margin-left: 2rem; height:50%;width:50%"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar" style="">
      <ul class="navbar-nav me-auto">
        <li class="nav-item" style="margin-left: 4rem;">
          <a class="nav-link text-light" href="#">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Nitro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Discover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Careers</a>
        </li>
      </ul>
      <form class="d-flex">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="#" class=""><button class="btn btn-light" type="button" style="border-radius: 25px;margin-right: 6rem;">Login</button></a>
        </li>  
        </ul>  
      </form>
    </div>
  </div>
</nav>

<div class="text-center text-light fw-bold">
  <h1 style="margin-top: 8rem;">IMAGINE A PLACE...</h1>
  <p class="" style="max-width: 735px; margin-left: 18rem; margin-top:2rem;">...where you can belong to a school club, a gaming group, or a worldwide art community. Where just you and a handful of friends can spend time together. A place that makes it easy to talk every day and hang out more often.</p>
  <div class="d-flex text-center">
    <a href="#" class=""><button class="btn btn-light" type="button" style="border-radius: 25px;margin-right: 6rem;">Login</button></a>
    <a href="#" class=""><button class="btn btn-light" type="button" style="border-radius: 25px;margin-right: 6rem;">Login</button></a>
  </div>
</div>


</body>

@endsection


