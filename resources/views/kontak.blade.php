@extends('layout/main')

@section('css')
@parent
<link rel="stylesheet" href="styles/kontak.css">
@endsection

@section('title', 'Kontak')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 mt-5 ml-4">
            <h1 class="text-white">Kontak</h1>
        </div>
    </div>
</div>
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
    </div>

</section>
@endsection