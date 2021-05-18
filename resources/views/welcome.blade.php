<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistema</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=" {{ asset('home/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href=" {{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href=" {{ asset('home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{ asset('home/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Regna - v4.2.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#Cellphones">Celulares</a></li>
                    <li><a class="nav-link scrollto" href="#Cakes">Pasteles</a></li>
                    <li><a class="nav-link scrollto" href="#Pets">Mascotas</a></li>
                    <li><a class="nav-link scrollto" href="#Songs">Canciones</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('login') }}">Ingresar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Proyecto De AOD</h1>
            <h2>Desarrollado Por:</h2>
            <h2>Ubaldo Serrano Vázquez</h2>
            <a href="{{ url('login') }}" class="btn-get-started">Ingresar</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->

        <!-- ======= Celulares ======= -->
        <section id="Cellphones">

            <div class="section-header">
                <h3 class="section-title">Celulares</h3>
            </div>
            <div class="">
                <div class="container">
                    @forelse($celulares as $cellphone)
                    <img style="width: 150px; height: 100%;" src="/imagenes/cellphones/{{ $cellphone->image }}" alt="{{ $cellphone->brand }} {{ $cellphone->model }}" />
                    <h2 class="cta-title">{{ $cellphone->brand }} {{$cellphone->model}} </h2>
                    <p> {{ $cellphone->description }}</p>
                    <p>color: {{ $cellphone->color }}</p>

                </div>

                @empty
                No hay registros en este momento
            </div>


            @endforelse
        </section>
        <!-- ======= Pasteles ======= -->

        <section id="Cakes">
            <div class="section-header">
                <h3 class="section-title">Pasteles</h3>
            </div>
            <div class="">
                <div class="container">
                    @forelse($pasteles as $cake)
                    <img style="width: 150px; height: 100%;" src="/imagenes/cakes/{{ $cake->image }}" alt="{{ $cake->client_name }} {{ $cake->taste }}" />
                    <h2 class="cta-title">{{ $cake->client_name }} </h2>
                    <p>Sabor: {{ $cake->taste }}</p>
                </div>

                @empty
                No hay registros en este momento
            </div>


            @endforelse
        </section>

        <!-- ======= Mascotas ======= -->
        <section id="Pets">
            <div class="section-header">
                <h3 class="section-title">Mascotas</h3>
            </div>
            <div class="">
                <div class="container">
                    @forelse ($mascota1 as $mascota)
                    <img style="width: 150px; height: 100%;" src="/imagenes/pets/{{ $mascota->image }}" alt="{{ $mascota->species }} {{ $mascota->taste }}" />
                    <h2 class="cta-title">{{ $mascota->species }} </h2>
                    <p>Raza: {{ $mascota->race }}</p>
                </div>
                @empty
                No hay registros en este momento
            </div>

            @endforelse
        </section>


        <!-- ======= Canciones ======= -->
        <section id="Songs">
            <div class="section-header">
                <h3 class="section-title">Canciones</h3>
            </div>
            <div class="">
                <div class="container">
                    @forelse ($datos as $song)
                    <img style="width: 150px; height: 100%;" src="/imagenes/songs/{{ $song->image }}" alt="{{ $song->title }} {{ $song->album }}" />
                    <h2 class="cta-title">{{ $song->title }} </h2>
                    <p>Raza: {{ $song->autor }}</p>
                </div>
                @empty
                No hay registros en este momento
            </div>

            @endforelse
        </section>

        <!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Navegation Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Navegación</h3>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li><a class="nav-link scrollto active"></a>
                                @foreach($information as $info)
                                {{ $info->email }}
                                @endforeach
                            </li>
                            <li><a class="nav-link scrollto active"></a>
                                @foreach($information as $info)
                                {{ $info->phone }}
                                @endforeach
                            </li>
                            <li><a class="nav-link scrollto active"></a>
                                @foreach($information as $info)
                                {{ $info->address }}
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>
                    @forelse($information as $info)
                    {{ $info->copyright }}

                    @empty
                    Todos los derechos reservados.

                    @endforelse
                </strong>
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center">UP</a>

    <!-- Vendor JS Files -->
    <script src=" {{ asset('home/assets/vendor/aos/aos.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/glightbox/js/glightbox.min.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/php-email-form/validate.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/purecounter/purecounter.js')}} "></script>
    <script src=" {{ asset('home/assets/vendor/swiper/swiper-bundle.min.js')}} "></script>

    <!-- Template Main JS File -->
    <script src=" {{ asset('home/assets/js/main.js')}}  "></script>



</body>

</html>