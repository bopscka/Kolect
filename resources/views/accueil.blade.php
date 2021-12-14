<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kolect</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Mentor - v2.2.1
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0"><button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="">Kolect</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{ url('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
        <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="">Home</a></li>
                <li>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#livre" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Epargne</span>
                    </a>

                </li>
                <li>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categorie" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Associations</span>
                    </a>

                </li>
                <li>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#client" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>A propos</span>
                    </a>
                </li>

                <li>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pret" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Contact</span>
                    </a>
                </li>

          </ul>
        </nav><!-- .nav-menu -->

        <a href="courses.html" class="get-started-btn">S'inscrire</a>

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <h1>Definissez vos objectifs financiers<br>& <br> atteignez-les</h1>
        <h2>Bienvenue sur Kolect, la plateforme qui revolutionne l'epargne. Ici vous avez les possiblites via l'option epargne de definir vos objectifs et de les atteindre</h2>
        <a href="courses.html" class="btn-get-started">Get Started</a>
      </div>
    </section><!-- End Hero -->


@yield('content')



    <!-- ======= Footer ======= -->
 

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ url('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ url('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js')}}"></script><nav class="mobile-nav d-lg-none">
          <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="{{url'(about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="trainers.html">Trainers</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Deep Drop Down</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>

          </ul>
        </nav><div class="mobile-nav-overly"></div>



  </body>
