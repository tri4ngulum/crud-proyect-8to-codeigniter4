<html>
    
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interline - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
		<link href="<?php echo base_url(IMG. '/favicon.png'); ?>" rel="icon">
		<link href="<?php echo base_url(IMG. '/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(RECURSOS. '/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url(RECURSOS. '/vendor/aos/aos.css" rel="stylesheet'); ?>">
	<link href="<?php echo base_url(RECURSOS. '/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url(RECURSOS. '/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url(RECURSOS. '/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url(RECURSOS. '/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url(RECURSOS. '/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

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
	<h1 class="text-light"><a href="<?php echo route_to('index');?>"><span>Interline</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <!-- Navegador dinamico -->
        <?php echo create_navbar('pages','');?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contacto</h2>
          <ol>
				<li><a href="<?php route_to('index');?>">Home</a></li>
            <li>Contacto</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="row">
          <h2>Contactanos</h2>
          <p>
Si tienes preguntas sobre el parque o necesitas ayuda con algo, estamos aquí para atenderte. Puedes comunicarte con nosotros por teléfono, correo electrónico o en nuestras oficinas. Esperamos con interés escuchar de ti.</p>
        </div>
        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Nuestra Ubicacion</h3>
                  <p>Carr. Picacho-Ajusco Km 1.5, Jardines del Ajusco, Tlalpan, 14200 <br>Ciudad de México, CDMX</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Nuestro Email</h3>
                  <p>Interline@diversion.com<br>Interline@colaboracion.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Llamanos</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tú Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tú Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje hs sido enviado.Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d928.3182048667915!2d-99.2103978806627!3d19.29523338176517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdffc995d59419%3A0xda423aed9a6b9c45!2sSix%20Flags%20M%C3%A9xico!5e1!3m2!1ses!2smx!4v1667188099061!5m2!1ses!2smx" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section><!-- End Map Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','inicio');?>"> Inicio </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','ingresar');?>"> Ingresar </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','juegos');?>"> Juegos </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','descripcion');?>"> Descripcion </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','about');?>"> Acerca de Nosotros </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<php echo redirections2('','contacto');?>"> Contacto </a></li>
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
        Creado por <a href="?php echo redirections('','about');?>">Yines</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
	<script src="<?php echo base_url(RECURSOS. '/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/aos/aos.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
	<script src="<?php echo base_url(RECURSOS. '/js/main.js'); ?>"></script>

</body>

</html>
