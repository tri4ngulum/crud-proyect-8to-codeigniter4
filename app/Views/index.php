<html>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interline - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo base_url(IMG .'/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url(IMG.'/apple-touch-icon.png'); ?>"  rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(RECURSOS. '/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url(RECURSOS. '/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <!-- Recursos Calendario -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS. '/calendar-01/css/style.css'); ?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(RECURSOS. '/css/style.css'); ?>" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
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
        <h1 class="text-light"><a href=""><span>Interline</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <!-- Navegador dinamico -->
        
       <?php echo create_navbar('','index'); ?> 

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
          <h2 class="animate__animated animate__fadeInDown">Interline <span>Hallowen</span></h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">No te pierdas nuestros <span>Eventos</span></h2>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Atracciones <span>Para todas las edades</span></h2>
        </div>
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
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-8 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <h2 class="title"><a href="">Boleto de un Dia</a></h2>
              <div><img src="<?php echo base_url(IMG. '/paseDia.jpg'); ?>" alt="300" width="250"></div>
              <p><br> Desde</p>
              <h2 class="title"><br>$990</h2>
              <p class="description">vigencia 1 dia despues de tu compra</p>
              <br>
              <div class="d-flex justify-content-around align-items-center mb-4">
                <a href="./panel/pages/compras.php" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <h4 class="title"><a href="">Pase Anual</a></h4>
              <div><img src=" <?php echo base_url(IMG. '/paseAnual.jpg'); ?>" alt="" width="250"></div>
              <p class="description"><br> 12 pagos mensuales desde</p>
              <h4 class="title"><br>$99</h4>
              <p>Vigencia 12 meses despues de tu <br> compra</p>
              <br>
              <div class="d-flex justify-content-around align-items-center mb-4">
                <a href="./panel/pages/compras.php" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
    </section>
    </div>
    </div>
    </div>

    <!-- Modal Calendario -->
    <div>
      <!-- Recursos Calendario -->
      <link rel="stylesheet" href=" <?php echo base_url(RECURSOS. '/calendar-01/css/stylecalendar.css'); ?>">
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Interline</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div>
                <section class="ftco-section">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-6 text-center mb-5">
                        <h2>¿Qué dia nos visitas?</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="calendar calendar-first" id="calendar_first">
                          <div class="calendar_header">
                            <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                            <h2></h2>
                            <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                          </div>
                          <div class="calendar_weekdays"></div>
                          <div class="calendar_content"></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Continuar</button>
              </div>
            </div>
          </div>
        </div>
      </div>




      </section><!-- End Services Section -->


      <!-- ======= Why Us Section ======= -->
      <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

          <div class="row">
            <div class="col-lg-6 video-box">
              <img src="<?php echo base_url(IMG. '/superman.jpg');?>" class="img-fluid" alt="">
              <a href="https://www.youtube.com/watch?v=UJ6Tq2fx-Q8" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

              <div class="icon-box">
                <div class="icon"><i class="bx bx-heart"></i></div>
                <p class="description">Es una montaña rusa del tipo hypercoaster ubicada en el parque de atracciones Interline México. Es una de las atracciones principales del parque, siendo muy demandada por los visitantes</p>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->
      <section class="features">
        <div class="container">

          <div class="section-title">
            <h2>Politicas del Parque</h2>
            <p>Para garantizar que todos nuestros visitantes tengan una experiencia divertida, segura e inolvidable, por favor, sigue las reglas del parque. Los visitantes que «rompen las reglas» tienen un impacto negativo en la seguridad y diversión de otros y se les puede pedir abandonar el parque sin rembolso alguno.

              ¡Gracias por hacer tu parte para que sea un gran día para todos!</p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5">
              <img src="<?php echo base_url(IMG. '/mayores21.jpg');?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4">
              <h3>Venta de alcohol</h3>
              <p>
                La venta de alcohol únicamente será para mayores de 21 años, se requerirá una identificación oficial. Solamente se venderá una bebida por persona en una sola venta.
                No se podrá ingresar con bebidas alcohólicas a los parques de Interline. Las bebidas alcohólicas adquiridas en el parque, deberán ser consumidas antes de salir del mismo.
              </p>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
              <img src="<?php base_url(IMG. '/comportamiento.jpg'); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
              <h3>Comportamiento</h3>
              <p>
                Se espera de todos los visitantes un apropiado comportamiento de acuerdo a un ambiente de cordialidad y respeto.

              </p>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5">
              <img src="<?php echo base_url(IMG. '/alimentos_y_bebidas_prohibido.png'); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5">
              <h3>Alimentos y Bebidas</h3>
              <p>No se permite ingresar al parque con alimentos, bebidas o hieleras. Sin embargo, se podrán hacer excepciones para aquellos visitantes que tienen dieta alimenticia especial por alergias a los alimentos, especificación o restricción religiosa y/o alimentos/fórmula para bebés. Al ingresar, marcaremos los paquetes de alimentos para mostrar que fueron aprobados por el parque.</p>
              <ul>
            </div>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
              <img src=" <?php echo base_url(IMG. '/apartar_lugares.jpg'); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1">
              <h3>Apartar Lugares</h3>
              <p>
                Apartar lugares en cualquier fila está estrictamente prohibido. Si sale de la fila y desea regresar, deberá volverse a formar hasta el final. Los visitantes que no sigan con esta norma, serán expulsados del parque sin derecho a reembolso.
              </p>
            </div>
          </div>

        </div>
      </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Recibe nuestras Ofertas!</h4>
            <p>Ingresa tu direccion de correo electrónico en el siguiene formulario y recibe todas nuestras ofertas e información de los proxímos eventos directo a tu correo</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Páginas</h4>
            <ul>
           </ul>
          </div>

          <!-- #Relleno sin usarse#
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
          -->

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactanos</h4>
            <p>
              Carr. Picacho-Ajusco Km 1.5, Jardines del Ajusco, Tlalpan, 14200 Ciudad de México, CDMX
              <strong>Telefono:</strong> +1 5589 55488 55
              +1 6678 254445 41<br>
              <strong>Email:</strong> Interline@colaboracion.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Acerca de Interline</h3>
            <p>Interline es un parque de diversiones bajo la Universidad Politecnica de Tlaxcala</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/UPTxOficial" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/UPTxOficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/uptxoficial/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCY_jx-W3WBuGkYY1GRgBsLg" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Interline</span></strong>. Todos los derechos Reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src=" <?php echo base_url(RECURSOS. '/vendor/purecounter/purecounter_vanilla.js'); ?>"></script> 
  <script src=" <?php echo base_url(RECURSOS. '/vendor/aos/aos.js'); ?>"></script> 
  <script src=" <?php echo base_url(RECURSOS. '/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS.'/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src=" <?php echo base_url(RECURSOS. '/js/main.js'); ?>"></script>

  <!-- Recursos calendario -->
  <!-- Calendario -->
  <script src=" <?php echo base_url(RECURSOS. '/calendar-01/js/jquery.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/calendar-01/js/popper.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/calendar-01/js/bootstrap.min.js'); ?>"></script>
  <script src=" <?php echo base_url(RECURSOS. '/calendar-01/js/main.js'); ?>"></script>

</body>

</html>