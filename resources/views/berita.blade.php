@extends('layout/main')

@section('title', 'Berita')

@section('container')
<style>
  @font-face {
    font-family: bold;
    src: url("font/Poppins-Bold.TTF")
  }

  @font-face {
    font-family: light;
    src: url("font/Poppins-Light.TTF")
  }

  @font-face {
    font-family: black;
    src: url("font/Poppins-Black.TTF")
  }

  @font-face {
    font-family: semiBold;
    src: url("font/Poppins-SemiBold.TTF")
  }

  h1 {
    font-family: bold;
  }

  .berita2 {
    position: relative;
    top: 200px;
  }

  .berita2-text1 {
    font-family: black;
    font-size: 40px;
  }

  .berita2-text2 {
    font-family: semiBold;
  }

  .berita2-text3 {
    font-family: light;
  }

  .card-2 {
    height: 20rem;
    width: 20rem;
    border-radius: 0;
    margin-bottom: 100px;;
  }

  .card-img-top {
    width: 350px;
    height: 200px;
    object-position: 10% 30%;
  }

  .kebo>img {
    display: block;
    height: 100%;
    object-fit: cover;
  }

  .about-text2 {
    font-family: semiBold;
  }

  .about-text3 {
    font-family: light;
  }

  .btn {
    font-family: light;
    border-radius: 0;
    font-size: 15px;
    background-color: #047E00;
  }
  .card-title {
    font-family: bold;
    font-size: 16px;
  }

  .card-text {
    font-family: light;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-10 mt-5 ml-4">
      <h1 class="text-white">Berita</h1>
    </div>
  </div>
</div>
@endsection

@section('berita2')
<section id="berita2" class="berita2 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="row justify-content-end mt-5">
          <div class="col-6">
            <img src="/img/gajah-2.png" alt="">
          </div>
          <div class="col-6 kebo d-flex flex-column justify-content-around">
            <img src="/img/badak.png" alt="" style="margin-bottom: 12px;">
            <img src="/img/kudanil.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-6 d-flex align-items-center">
        <div class="ml-5 mt-5">
          <h1 class="berita-text1">10 Hewan Herbivora <br> Yang Berbahaya</h1>
          <p class="about-text2 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci asperiores? Id velit recusandae dolores maxime incidunt doloribus laudantium odio quae. Perspiciatis exercitationem, facilis velit minima itaque assumenda maxime et.</p>
          <p class="about-text3 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam ratione sed. A assumenda officia dolorem maxime doloremque? Soluta aspernatur excepturi cum voluptates nulla totam dolorum magnam earum tempore sit.</p>
          <a href="/tentang" class="btn btn-success px-4 py-2">baca selengkapnya &#10132;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="berita2" class="berita2 pb-5">
  <div class="container mb-5">
    <div class="row">
      <div class="col-10 ml-4">
        <h1 class="berita-text1">Berita Lainnya</h1>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mx-2 mt-5">
        <div class="col mb-4">
          <div class="card-2">
            <img src="/img/harimau-1.png" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Apa Kabar Kebun Binatang Saat Wabah Covid-19?</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card-2">
            <img src="/img/burung.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Anugerah dari Hutan <br> Indonesia</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card-2">
            <img src="/img/badak.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">10 Hewan Herbivora <br> Yang Berbahaya</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 mx-2">
        <div class="col mb-5">
          <div class="card-2">
            <img src="/img/harimau-2.png" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">4 Penyakit yang Ditularkan Hewan ke Manusia</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card-2">
            <img src="/img/terumbuKarang.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Terumbu Karang: Pengertian, Jenis, Sebaran, dan Masalah</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card-2">
            <img src="/img/jerapah.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Ternyata, Tanduk Rusa Berasal dari Sel Kanker Tulang</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection