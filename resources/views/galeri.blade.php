@extends('layout/main')

@section('title', 'Galeri')

@section('container')
<style>
@font-face{
    font-family: bold;
    src: url("font/Poppins-Bold.TTF")
}
h1{
    font-family: bold;
}
.galeri2{
    position: relative;
    top: 200px;
    margin-bottom: 200px;
}
.carousel-inner2{
    width: 1110px;
    height: 500px;
    object-fit: cover;
    object-position: 5% 50%;
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-10 mt-5 ml-4">
                <h1 class="text-white">Galeri</h1>
            </div>
        </div>
    </div>
@endsection

@section('galeri2')
<section id="galeri2" class="galeri2 pb-5">
    <div class="container mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner2">
                <div class="carousel-item active">
                    <img src="img/buaya.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/harimau-2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="gambar-cont mt-5">
            <div class="row">
                <div class="col">
                    <img src="/img/elang.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/jerapah.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/gajah.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/burung-2.png" width="100%" class="about-gambar">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col">
                    <img src="/img/kudanil.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/orangUtan.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/terumbuKarang.png" width="100%" class="about-gambar">
                </div>
                <div class="col">
                    <img src="/img/kadal.png" width="100%" class="about-gambar">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection