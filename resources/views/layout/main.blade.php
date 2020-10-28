<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>@yield('title')</title>

  <style>
    .gambar-wrapper {
      position: relative;
    }

    .crop {
      position: absolute;
      width: 100%;
      height: 180%;
      object-fit: cover;
      object-position: 5% 50%;
      filter: brightness(40%);
      -webkit-filter: brightness(40%);
    }

    .gambar {
      position: absolute;
      max-width: 100%;
      filter: brightness(70%);
      -webkit-filter: brightness(70%);
    }

    @font-face {
      font-family: semiBold;
      src: url("font/Poppins-SemiBold.TTF")
    }

    @font-face {
      font-family: medium;
      src: url("font/Poppins-Medium.TTF")
    }

    .navbar-brand {
      font-family: semiBold;
    }

    .navbar-nav {
      font-size: 11px;
      font-family: medium;
    }

    /*---------------------
        Footer
      -----------------------*/

    .footer-section {
      background: #191919;
      padding-top: 75px;
    }

    .footer-left {
      margin-bottom: 30px;
    }

    .footer-left h5 {
      color: #ffffff;
      font-weight: 700;
      margin-bottom: 26px;
      margin-left: 37px;
    }

    .footer-left ul li {
      list-style: none;

    }

    .footer-left ul li p {

      font-size: 16px;
      color: #b2b2b2;

    }

    .footer-left .footer-social {
      padding-top: 25px;
      padding-left: 32px;
    }

    .footer-left .footer-social a {
      display: inline-block;

      margin-right: 7px;
      position: relative;
      z-index: 1;
    }

    .footer-left .footer-social a:hover:before {
      opacity: 1;
    }

    .footer-left .footer-social a:before {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      background: #e7ab3c;
      content: "";
      border-radius: 50%;
      opacity: 0;
      -webkit-transition: all 0.3s;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      z-index: -1;
    }

    .footer-widget {
      margin-bottom: 30px;
    }

    .footer-widget h5 {
      color: #ffffff;
      font-weight: 700;
      margin-bottom: 26px;
      margin-left: 37px;
    }

    .footer-widget ul li {
      list-style: none;

    }

    .footer-widget ul li a {
      line-height: 36px;
      font-size: 16px;
      color: #b2b2b2;

    }

    .copyright-reserved {
      border-top: 1px solid #303030;
      padding: 15px 0;
      margin-top: 45px;
    }

    .copyright-reserved .copyright-text {

      font-size: 16px;
      color: #b2b2b2;
    }

    .copyright-reserved .copyright-text a {
      color: #b2b2b2;
    }

    .copyright-reserved .copyright-text i {
      color: #cc2424;
    }

    .copyright-reserved .copyright-text a:hover {
      color: #e7ab3c;
    }

    .copyright-reserved .payment-pic {
      float: right;
    }
  </style>
</head>

<body>

  <div class="gambar-wrapper">
    @if (\Request::is('/'))
    <img src="/img/bg-header.png" alt="" class="gambar">
    @else
    <img src="/img/bg-header.png" alt="" class="crop">
    @endif
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand text-white ml-4" href="#">Tropisianimal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-4" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-3">
            <a class="nav-link active text-white mx-3" href="{{ url('/')}}">HOME</a>
            <a class="nav-link text-white mx-3" href="{{ url('/tentang')}}">TENTANG</a>
            <a class="nav-link text-white mx-3" href="{{ url('/berita')}}">BERITA</a>
            <a class="nav-link text-white mx-3" href="{{ url('/galeri')}}">GALERI</a>
            <a class="nav-link text-white mx-3" href="{{ url('/kontak')}}">KONTAK</a>
          </div>
        </div>
      </div>
    </nav>

    @yield('container')
    @yield('about')
    @yield('index-3')
    @yield('berita')
    @yield('galeri')
  </div>
  @yield('about2')
  @yield('about3')
  @yield('berita2')
  @yield('galeri2')
  @yield('kontak')

  <!-- Footer Section Begin -->
  <footer class="footer-section mt-5">
    <div class="container">
      <div class="row">
        <div class="footer-left">
          <h5><img src="/img/Tropisianimal.png" alt=""></h5>
          <ul>
            <li>
              <p href="#">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sad do <br> eiusmod tempor incididunt ut labore <br> et dolore magna aliqua. Ut enim ad</p>
            </li>
          </ul>
          <div class="footer-social">
            <a href="#"><img src="/img/001-facebook.png" alt=""></a>
            <a href="#"><img src="/img/002-twitter.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-2 offset-lg-1">
          <div class="footer-widget">
            <h5>Usefull links</h5>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Hewan</a></li>
              <li><a href="#">Galeri</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer-widget">
            <h5>Privacy</h5>
            <ul>
              <li><a href="#">Karir</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Kontak Kami</a></li>
              <li><a href="#">Servis</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="footer-widget">
            <h5>Contact Info</h5>
            <ul>
              <li>
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="{{asset('assets/mail.svg')}}" alt=""> Tropisianimal@gmail.com</p>
              </li>
              <li>
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="{{asset('assets/phone.svg')}}" alt=""> +62 812 3456 7890</p>
              </li>
              <li>
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="{{asset('assets/map-pin.svg')}}" alt=""> Kota Bandung, Jawa Barat</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-reserved">
      <div class="container-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p style="text-align: center">Copyright &copy;2020 All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>