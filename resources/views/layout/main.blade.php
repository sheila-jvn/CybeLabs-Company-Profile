<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  @section('css')
  <link rel="stylesheet" href="styles/app.css">
  @show

  <title>@yield('title')</title>

</head>

<body>

  <div class="gambar-wrapper">
    @if (Request::is('/'))
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
            <h5>Useful links</h5>
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
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="img/mail.svg" alt=""> Tropisianimal@gmail.com</p>
              </li>
              <li>
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="img/phone.svg" alt=""> +62 812 3456 7890</p>
              </li>
              <li>
                <p href="#" style="line-height: 20px; font-size: 16px; color: #b2b2b2;"><img src="img/map-pin.svg" alt=""> Kota Bandung, Jawa Barat</p>
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