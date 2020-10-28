@extends('layout/main')

@section('css')
@parent
<link rel="stylesheet" href="/styles/index.css">
@endsection

@section('title', 'Tropisianimal')

@section('hero')
<h1 class="text-white">Hewan</h1>
<h1 class="text-white">Tropis di Dunia</h1>
<p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur<br>adipisicing elit. Totam possimus odit eos reprehenderit magnam.<br>Tenetur sit saepe voluptate? Dolorem ipsum magnam dolores adipisci consectetur <br> soluta quibusdam unde eligendi explicabo quod.</p>
@endsection

@section('about')
<section id="about" class="about pb-5">
  <div class="about">
    <div class="row justify-content-center mb-5">
      <div class="col-md-5 pb-5">
        <p class="tentang-kami text-success">TENTANG KAMI</p>
        <h1 class="about-text1">Membangun <br> Komunitas Hewan</h1>
        <p class="about-text2 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci asperiores? Id velit recusandae dolores maxime incidunt doloribus laudantium odio quae. Perspiciatis exercitationem, facilis velit minima itaque assumenda maxime et.</p>
        <p class="about-text3 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam ratione sed. A assumenda officia dolorem maxime doloremque? Soluta aspernatur excepturi cum voluptates nulla totam dolorum magnam earum tempore sit.</p>
        <a href="/tentang" class="btn btn-success px-4 py-2">baca selengkapnya &#10132;</a>
      </div>
      <div class="gambar-cont">
        <div class="row">
          <div class="col">
            <img src="/img/gajah.png" width="100%" class="about-gambar">
          </div>
          <div class="col">
            <img src="/img/kadal.png" width="100%" class="about-gambar">
          </div>
        </div>
        <div class="row pt-4">
          <div class="col">
            <img src="/img/buaya.png" width="100%" class="about-gambar">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('index-3')
<div class="index-3 mt-5">
  <div class="gambar-wrapper">
    <img src="/img/pantai.png" alt="" class="gambar-2">
    <div class="container">
      <div class="row">
        <div class="col-10 ml-4 mt-5">
          <h1 class="cont2-text text-white mb-4">Kami Membawa Anda <br> Untuk Mengetahui Lebih Dalam</h1>
        </div>
      </div>
      <div class="row justify-content-center mx-4 mt-4">
        <div class="card-deck">
          <div class="card">
            <div class="card-body text-center">
              <div class="tengah">
                <div class="lingkaran">
                  <img src="/img/pawprint.svg">
                </div>
              </div>
              <h5 class="card-title mt-3">Lorem Ipsum Dolor Sit Amet</h5>
              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Quaerat sed iure quis tempora quas assumenda</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body text-center">
              <div class="tengah">
                <div class="lingkaran">
                  <img src="/img/pawprint.svg">
                </div>
              </div>
              <h5 class="card-title mt-3">Lorem Ipsum Dolor Sit Amet</h5>
              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Quaerat sed iure quis tempora quas assumenda</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body text-center">
              <div class="tengah">
                <div class="lingkaran">
                  <img src="/img/pawprint.svg">
                </div>
              </div>
              <h5 class="card-title mt-3">Lorem Ipsum Dolor Sit Amet</h5>
              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Quaerat sed iure quis tempora quas assumenda</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body text-center">
              <div class="tengah">
                <div class="lingkaran">
                  <img src="/img/pawprint.svg">
                </div>
              </div>
              <h5 class="card-title mt-3">Lorem Ipsum Dolor Sit Amet</h5>
              <p class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, Quaerat sed iure quis tempora quas assumenda</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection

@section('berita')
<section id="berita" class="berita pb-5">
  <div class="container">
    <div class="row">
      <div class="col-10 ml-4">
        <p class="berita-text text-success">BERITA</p>
        <h1 class="berita-text1">Baca Berita Terbaru Kami <br> Dalam Tropisianimal</h1>
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
      <div class="col mb-4">
        <div class="card-2">
          <img src="/img/harimau-2.png" class="card-img-top">
          <div class="card-body text-center">
            <h5 class="card-title">4 Penyakit yang Ditularkan Hewan ke Manusia</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card-2">
          <img src="/img/terumbuKarang.png" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Terumbu Karang: Pengertian, Jenis, Sebaran, dan Masalah</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
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

@section('galeri')
<section id="galeri" class="galeri">
  <div class="container">
    <div class="row">
      <div class="col-10 ml-4">
        <p class="galeri-text text-success">GALERI</p>
        <h1 class="galeri-text1">Lihat Lebih Banyak Hewan Tropis <br> Pada Galeri Kami</h1>
      </div>
    </div>
  </div>

  <div class="row no-gutters">
    <div class="col-3">
      <img src="/img/kadal.png" class="img-fluid">
    </div>
    <div class="col-3">
      <img src="/img/orangUtan.png" class="img-fluid">
    </div>
    <div class="col-3">
      <img src="/img/penyu.png" class="img-fluid">
    </div>
    <div class="col-3">
      <img src="/img/burung-2.png" class="img-fluid">
    </div>
  </div>
</section>
@endsection