@extends('layouts.main')

@section('isi')
<div class="bg-primary text-white text-center" style="height: 25rem; padding-top: 9rem;">
  <h1>Riwayat Hidup</h1>
  <p>Valentino Rossi</p> 
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-5">
      <h2>About Me</h2>
      <img style="height: 80%; width: 80%;" src="{{URL('/images/gambar1.jpg')}}">
      
    </div>
    <div class="col-sm-7 text-justify">
      <h2>Riwayat Hidup</h2>

      <p class="text-justify">Tiada sosok yang paling berpengaruh dalam hidup Valentino Rossi selain ayahnya, Graziano Rossi. Sang ayah memiliki andil besar menanamkan kecintaan seni balap motor pada Rossi kecil. Apalagi ayahnya dikenal sebagai pembalap motor handal</p>

      <p>Saking cintanya terhadap dunia balapan, kelak ketika memiliki anak Graziano ingin menyematkan nama sahabatnya Valentino yang telah meninggal dunia. Sahabatnya itu punya jasa besar. Valentino telah membantu Graziano menang dalam balapan motor 250cc Grand Prix.</p>
        
      <p>Karena itu, ketika anaknya lahir pada 16 Februari 1979 di Tavullia, Urbino, buah cintanya langsung diberi nama Valentino Rossi. Kecintaan Rossi akan dunia balapan mulai tumbuh ketika Rossi masih kecil. Kesukaan itu tumbuh karena sehari-hari Rossi banyak menghabiskan waktu bersama sang ayah. Secara tak langsung, sifat sang ayah yang menular kepada Rossi.</p>
      
    </div>
  </div>
</div>

@endsection


