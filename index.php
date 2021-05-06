<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omer Hodžić | Stand Up Comedy</title>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Folio - v2.2.1
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.php"><img src="assets/img/favicons/logo.png" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="index.php" class="smoothScroll">Naslovna</a></li>
          <li><a href="#upcoming-shows" class="smoothScroll">Nastupi</a></li>
          <li><a href="#about" class="smoothScroll">Biografija</a></li>
          <li><a href="video.php" class="smoothScroll">Video</a></li>
          <li><a href="galerija.php" class="smoothScroll">Galerija</a></li>
          <li><a href="#contact" class="smoothScroll">Kontakt</a></li>
        </ul>

      </div>
    </div>
  </nav><!-- End Navbar -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">
    <div class="overlay">
      <div class="container">
        <div class="hero-content">
          <h1 style="color: black"><span class="typed">Omer Hodžić</span></h1>
          <p style="color: black" class="typed-items" data-typed-person="Omer Hodžić">Stand Up Comedy</p>

          <ul class="list-unstyled list-social">
            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">
      <!-- ======= Portfolio Section ======= -->
      <div id="upcoming-shows" class="paddsection">

          <div class="container" style="display: flex;">
              <div class="section-title animation-element-bio bounce-up">
                  <h1 id="upcoming-shows-header" class="subject">Nastupi</h1>
              </div>
          </div>

          <div class="container">
              <div class="row upcoming-shows-row">
                  <?php
                    $filename = "assets/events/nastupi.csv";
                    $file = fopen($filename, "r");
                    $empty = true;

                    while (($nastup = fgetcsv($file, 1000, "|")) !== false) {
                        $date = date('Y-m-d', strtotime($nastup[0]));
                        if ($date > date('Y-m-d')) {
                            $empty = false;
                            echo '<div class="col-md-12"><p class="upcoming-show animation-element slide-left testimonial"><img src="assets/img/favicons/microphone.png"><span>   ' . $nastup[0] . ' </span><span style="font-weight: bolder"> - ' . $nastup[1] . ' </span><span style="font-weight: lighter"> (' . $nastup[2] . ') </span></p></div>';
                        }
                    }

                    if ($empty) {
                        echo '<div class="col-md-12"><p class="upcoming-show animation-element slide-left testimonial"><img src="assets/img/favicons/microphone.png"><span> Trenutno nema najavljenih nastupa </span></p></div>';
                    }

                    fclose($file);
                  ?>
              </div>
          </div>

      </div><!-- End Portfolio Section -->
    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="skew">
          <span></span>
      </div>
      <div class="container" style="display: flex; flex-direction: column;">
        <div class="section-title animation-element-bio bounce-up">
            <h1 id="upcoming-shows-header" class="subject">Biografija</h1>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="about-descr animation-element-bio bounce-up">
              <p class="p-heading subject">Omer Hodžić je dvadesetosmogodišni Stand Up komičar iz Mostara. Stand Up komedijom se bavi već 8 godina. Iza sebe ima više od sedam stotina nastupa širom Balkana, a neke i u pravoj evropi. Između ostalog nastupao je u Sarajevu, Tuzli, Banja Luci, Zagrebu, Splitu, Rijeci, Beogradu, Novom Sadu, Subotici, Podgorici, Mariboru, Ljubljani, Budimpešti, Beču, Cirihu i mnogim drugim manjim gradovima i mjestima.</p>
                <p class="p-heading subject">Bio je dijelom 3 u 1 Stand Up Comedy TV programa snimljenog prvobitno za TV 1 , a koji je kasnije emitiran i na brojnim drugim kablovskim tv postajama.</p>
                <p class="p-heading subject">Omer Hodžić je bio autor i voditelj prve političko društvene satirične TV emisije <b>“Monty Dayton Show”</b> čijih se trideset epizoda emitiralo na televiziji.</p>
            </div>

          </div>
        <div class="col-lg-5">
            <div class="div-img-bg">
                <div class="about-img">
                    <img src="assets/img/bio.jpg" class="img-responsive" alt="me">
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="about-descr animation-element-bio bounce-up">
                <p class="p-heading subject">Također djeluje u sklopu mostarske satirične skupine <b>Onomatobleja</b> u kojoj je jedan od autora i aktera istoimene radio emisije koja se emitira na ROM u sklopu programa Drugo ime za slobodu Abraš radija. Emisija ima već više od 100 epizoda. Sa Onomatoblejom je stvorio i izveo multimedijalnu predstavu naziva Izborna Smutnja (2018). U 2019 – oj je kreirao Onomatobleja Show – predstavu sa preko 50 izvođenja širom BiH. U 2020 – oj Onomatobleja dobija svoju treću predstavu sličnog naziva, ali sadržajno potpuno drugačiju od prethodne – Onomatobleja Talk Show.</p>
                <p class="p-heading subject">U sklopu programa Radio Geometrija Abraš radija, koji se također emitira na ROM – u, on je autor i voditelj programa <b>Komedija sa stavom</b> – emisije o Stand Up komediji. </p>
                <p class="p-heading subject">Iza sebe ima jedan one man show naziva <b>“Normala”</b> ali najviše voli da nastupa u Showcase formatu sa kolegom Mirkom Komljenovićem Mirkanom, ili Igorom Drljom. Pored samih nastupa, on je i organizator brojnih  večeri Stand Up komedije širom BiH kako za domaće, tako i za regionalne komičare. </p>
                <p class="p-heading subject">Prije nego što je postao ovisan o smijehu i Stand Up komediji bavio se hip hop muzikom i smatrao se reperom. Srećom, odrastao je i više se ne bavi hip hop muzikom, mada je hip hop forma zastupljena u njegovom komičarskom radu. Također, završio je i Mašinsko – Saobraćajnu srednju školu, koja je bila pun pogodak budući da još uvijek nema vozačku dozvolu. Ima indexe sa nekoliko visokoškolskih ustanova ali nije završio ni jedan. Još uvijek.</p>
                <p class="p-heading subject">Omerovi nastupi su provokativni, politički nekorektni, a neki kažu i smiješni.</p>
            </div>
        </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-12">
              <div class="contact-contact">

                <h2 class="mb-30" style="text-transform: uppercase">Javi se, nemoj se stidit</h2>

                <ul class="contact-details">
                  <li><span>Email: </span><span style="font-weight: bolder">udruzenjestandup@gmail.com</span></li>
                  <li><span>Telefon: </span><span style="font-weight: bolder">+387 63 477 188</span></li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">
          <img src="assets/img/favicons/logo-alt.png" width="200" alt="logo">
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
  $(document).ready(function() {
    //window and animation items
    var animation_elements = $.find('.animation-element');
    var web_window = $(window);
    function check_if_in_view() {
      //get current window information
      var window_height = web_window.height();
      var window_top_position = web_window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      //iterate through elements to see if its in view
      $.each(animation_elements, function() {
        var element = $(this);
        var element_height = $(element).outerHeight();
        var element_top_position = $(element).offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
          element.addClass('in-view');
        } else {
          element.removeClass('in-view');
        }
      });

    }

    //on or scroll, detect elements in view
    $(window).on('scroll resize', function() {
        check_if_in_view()
      })
      //trigger our scroll event on initial load
    $(window).trigger('scroll');

  });
  </script>

  <script>
    //FOR TESTING PURPOSES - BIOGRAFIJA might delete later idk
    var $animation_elements = $('.animation-element-bio');
    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
  
  </script>

</body>

</html>