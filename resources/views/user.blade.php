
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Training</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url("user/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ url('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{url("user/assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">
  <link href={{url("user/assets/vendor/aos/aos.css" )}} rel="stylesheet">
  <link href={{url("user/assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{url("user/assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{url("user/assets/vendor/boxicons/css/boxicons.min.css" )}}rel="stylesheet">
  <link href={{url("user/assets/vendor/glightbox/css/glightbox.min.css" )}}rel="stylesheet">
  <link href={{url("user/assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('user/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Solonet</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="#">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
            </form>
        </div></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Training</span></h2>
        </div>
      </div>

      <!-- Slide 2 -->

      <!-- Slide 3 -->
      <div class="carousel-item">
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container d-flex">
        {{-- @foreach ($dataUser as $data)
        <div class="row">
            <div class="col-md-10 col-lg-10 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">{{$data->nama}}</a></h4>
                <h4 class="title"><a href="">{{$data->training}}</a></h4>
                <h4 class="title"><a href="">{{$data->mentor}}</a></h4>
                <h4 class="title"><a href="">{{$data->harga}}</a></h4>
                <p class="description">Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC</p>
                <a href="" class="btn btn-success">Daftar</a>
                </div>
            </div>
        </div>
        @endforeach --}}
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <center><h4>{{ $data->training }}</h4></center>
                </div>
                <div class="container"></div>
                    <center><img width="500" src="{{ url('pict/'. $data->gambar) }}" alt=""></center>

                <div class="card-body">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6>Deskripsi :</h6>
                            <p>{{ $data->deskripsi }}</p>
                        </div>
                    </div>

                <form method="POST" action="{{ route('dataUser.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-4 col">
                            <label for="namaDepan">Nama Depan</label>
                            <input type="text" name="namaDepan" class="form-control" id="namaDepan" aria-describedby="namaDepan">
                        </div>

                        <div class="form-group mb-4 col">
                            <label for="namaBelakang">Nama Belakang</label>
                            <input type="text" name="namaBelakang" class="form-control" id="namaBelakang" aria-describedby="namaBelakang">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>

                    <div class="form-group mb-4">
                        <label for="No_telp">No. Telepone</label>
                        <input type="number" name="no_telp" class="form-control" id="No_telp" aria-describedby="No_telp">
                    </div>

                    <div class="form-group mb-4">
                        <div class="card" style="width: 18rem;">
                            <label for="No_telp">harga</label>
                            <h2>Rp. {{ $data->harga }}</h2>
                        </div>
                    </div>

                    <input type="hidden" name="id_training" value="{{ $data->id }}" class="form-control" id="training" aria-describedby="training">

                    <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                </form>
            </div>
        </div>
        </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">


    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url("user/assets/vendor/purecounter/purecounter.js") }}"></script>
  <script src="{{ url("user/assets/vendor/aos/aos.js") }}"></script>
  <script src="{{ url("user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ url("user/assets/vendor/glightbox/js/glightbox.min.js") }}"></script>
  <script src="{{ url("user/assets/vendor/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ url("user/assets/vendor/swiper/swiper-bundle.min.js") }}"></script>
  <script src="{{ url("user/assets/vendor/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ url("user/assets/vendor/php-email-form/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url("user/assets/js/main.js") }}"></script>

</body>

</html>
