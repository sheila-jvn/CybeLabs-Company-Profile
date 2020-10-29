@extends('layout/main')

@section('css')
@parent
<link rel="stylesheet" href="styles/kontak.css">
@endsection

@section('title', 'Kontak')

@section('hero')
<h1 class="text-white">Kontak</h1>
@endsection

@section('kontak')
<section id="kontak" class="kontak pb-5">
  <div class="container mb-5">
    <img src="/img/maps.png" alt="">

    <h1 class="contact-text1 mt-5">Kontak kami</h1>

    <div class="row mt-5">
      <div class="col-8">
        <textarea class="form-control textarea" id="exampleFormControlTextarea1" rows="10" placeholder="Deskripsi"></textarea>
      </div>
      <div class="col-4">
        <div class="row">
          <div class="col-12"><input class="form-control form" type="text" placeholder="Subject"></div>
        </div>
        <div class="row mt-3">
          <div class="col-12"><input class="form-control form" type="text" placeholder="Nama"></div>
        </div>
        <div class="row mt-3">
          <div class="col-12"><input class="form-control form" type="text" placeholder="Email"></div>
        </div>
        <div class="row mt-3">
          <div class="col-12"><a class="btn btn-success px-4 py-2">Kirim <img src="/img/send.svg" alt=""></a></div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-4 d-flex justify-content-center">
        <div class="lingkaran">
          <img src="/img/mail.svg">
        </div>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <div class="lingkaran">
          <img src="/img/phone.svg">
        </div>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <div class="lingkaran">
          <img src="/img/map-pin.svg">
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-4 d-flex justify-content-center">
        <p class="text-1">Email</p>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <p class="text-1">Phone</p>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <p class="text-1">Location</p>
      </div>
    </div>
    <div class="row">
      <div class="col-4 d-flex justify-content-center">
        <p class="text-2">tropisianimal@gmail.com</p>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <p class="text-2">+62 812 3456 7890</p>
      </div>
      <div class="col-4 d-flex justify-content-center">
        <p class="text-2 text-center">Kota Bandung, Jawa Barat <br> Indonesia</p>
      </div>
    </div>
  </div>

</section>
@endsection