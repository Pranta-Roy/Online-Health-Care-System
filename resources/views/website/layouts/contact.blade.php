<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="{{asset('#')}}"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="{{asset('#')}}"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="{{asset('#')}}"><span class="mai-logo-facebook-f"></span></a>
              <a href="{{asset('#')}}"><span class="mai-logo-twitter"></span></a>
              <a href="{{asset('#')}}"><span class="mai-logo-dribbble"></span></a>
              <a href="{{asset('#')}}"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{asset('#')}}"><span class="text-primary">One</span>-Health</a>

        <form action="{{asset('#')}}">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/doctors">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">News</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{asset('#')}}">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url('{{asset('img/bg_image_1.jpg')}}');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>

  <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url{{asset('img/banner-pattern.svg')}};">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="{{asset('img/mobile_app.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="{{asset('img/google_play.svg')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{asset('img/app_store.svg')}}" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="{{asset('#')}}">About Us</a></li>
            <li><a href="{{asset('#')}}">Career</a></li>
            <li><a href="{{asset('#')}}">Editorial Team</a></li>
            <li><a href="{{asset('#')}}">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="{{asset('#')}}">Terms & Condition</a></li>
            <li><a href="{{asset('#')}}">Privacy</a></li>
            <li><a href="{{asset('#')}}">Advertise</a></li>
            <li><a href="{{asset('#')}}">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="{{asset('#')}}">One-Fitness</a></li>
            <li><a href="{{asset('#')}}">One-Drugs</a></li>
            <li><a href="{{asset('#')}}">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="{{asset('#')}}" class="footer-link">701-573-7582</a>
          <a href="{{asset('#')}}" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="{{asset('#')}}" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="{{asset('#')}}" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="{{asset('#')}}" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="{{asset('#')}}" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="{{asset('#')}}" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">>KOWSHICK-PRANTO-SARFARAJ-ADITI</a>. All right reserved</p>
    </div>
  </footer>

<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('js/google-maps.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>