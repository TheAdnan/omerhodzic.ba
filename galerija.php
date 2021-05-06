<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galerija | Omer Hodžić Stand Up Comedy</title>
  <meta content="Omer Hodzic Stand up Comedy" name="description">
  <meta content="omer,hodzic,standup,comedy,komedija" name="keywords">

  <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/hover/hover.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio - v2.2.1
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .slider-item img {
        max-width: 100vw;
        height: auto;
    }

    .slider .slider-item{
        display: none;
        animation: reveal .5s ease-in-out;
    }
    .slider .slider-item.active {
        display: block;
    }
    .slider .dots {
        text-align: center;
        padding: 10px;
    }
    .slider .dots li {
        cursor: pointer;
        display: inline-block;
        background: #333;
        color: #fff;
        padding: 7px 11px;
        line-height: .5;
        border-radius: 50%;
        text-indent: -9999px;
        opacity: .5;
        -webkit-transition: opacity .2s;
        -o-transition: opacity .2s;
        transition: opacity .2s;
    }
    .slider .dots li.active{
        opacity: 1;
    }
    @keyframes reveal{
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }
    }

</style>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="index.php" class="smoothScroll">Naslovna</a></li>
          <li><a href="index.php#upcoming-shows" class="smoothScroll">Nastupi</a></li>
          <li><a href="index.php#about" class="smoothScroll">Biografija</a></li>
          <li><a href="video.php" class="smoothScroll">Video</a></li>
          <li><a href="galerija.php" class="smoothScroll">Galerija</a></li>
          <li><a href="index.php#contact" class="smoothScroll">Kontakt</a></li>
        </ul>

      </div>
    </div>
  </nav><!-- End Navbar -->
  <main id="main">
      <div id="container">
          <div id="slider" class="slider">
              <?php
                  $directory = "assets/img/photo";
                  $ext = "/*.jpg";
                  $images = glob($directory . $ext);

                  foreach($images as $index => $image)
                  {
                      if ($index == 0) {
                          echo '<div class="slider-item active"><img src="' . $image . '" class="img-fluid"></div>';
                      }
                      else {
                          echo '<div class="slider-item"><img src="' . $image . '" class="img-fluid"></div>';
                      }
                  }
              ?>
              <ul id="dots" class="list-inline dots"></ul>
          </div>
      </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
      <div class="container">
          <div class="socials-media text-center">
              <img src="assets/img/logo-alt.png" width="200" alt="logo">
          </div>

          <p style="display: none;">&copy; Copyrights Test. All rights reserved.</p>
          <div class="credits" style="display: none">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>

      </div>
  </div><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/typed/typed.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <script>
        var slider = document.getElementById('slider')
        var sliderItem = slider.getElementsByTagName('div');
        var dots = document.getElementById('dots');
        var dotsChild = document.getElementById('dots').getElementsByTagName('li');
        for (i = 0; i < sliderItem.length; i++) {
            dots.appendChild(document.createElement('li'));
            dotsChild[i].classList.add('list-inline-item');
            dotsChild[i].setAttribute("id", i);
            dotsChild[i].innerHTML = i;
            dotsChild[0].classList.add('active');
            dotsChild[i].addEventListener("click", runSlider);
        }
        function runSlider(){
            var dnum = this.getAttribute("id");
            for (i = 0; i < sliderItem.length; i++) {
                sliderItem[i].classList.remove('active');
                sliderItem[dnum].classList.add('active');
                dotsChild[i].classList.remove('active');
                dotsChild[dnum].classList.add('active');
            }
        }
    </script>
</body>

</html>