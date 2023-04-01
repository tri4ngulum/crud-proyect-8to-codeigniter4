<html>
    
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interline - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
		<link href="<?php echo base_url(IMG. 'favicon.png'); ?>" rel="icon">
		<link href="<?php echo base_url(IMG. '/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

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
        <h1 class="text-light"><a href="/"><span>Interline</span></a></h1>
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

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="<?php echo route_to('inicio');?>">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
					<img src="<?php echo base_url(IMG. '/img/interline_Logo.png'); ?>" class="img-fluid" alt="" width="700">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Sobre Nosotros</h3>
            <p>
            ¡Obtén toda la información sobre tu parque temático favorito en México,Interline México!
            </p>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p>Millones de clientes por año</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
            <p>Juegos Mecánicos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4500" data-purecounter-duration="1" class="purecounter"></span>
            <p>m <sup>2  </sup>de Diversión</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="1" class="purecounter"></span>
            <p>Equipo de trabajo</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Visión</h2>
          <p>Ser la empresa lider en México de parques temáticos.</p>
        </div>

        <div class="section-title">
          <h2>Misión</h2>
          <p>Crear diversión y emoción en todas las edades.</p>
        </div>

        <div class="section-title">
          <h2>Nuestros Valores</h2>
          <p>Seguridad, Servicio, Diversión & Amabilidad, Integridad, Inovación, Orientación a Resultados.</p>
        </div>

        <div class="section-title">
          <h2>Nuestro Mantra</h2>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="50">
              <span class="skill">Amigable<i class="val"></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Limpio <i class="val"></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Rápido <i class="val"></i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Seguro <i class="val"></i></span>
            </div>
          </div>

        </div>



      </div>
    </section><!-- End Our Skills Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Recibe nuestras Ofertas!</h4>
            <p>Ingresa Tu direccion de correo electrónico en el siguiene formulario y recibe todas nuestras ofertas e información de los proxímos eventos directo a tu correo</p>
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
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('inicio');?>"> Inicio </a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('ingresar');?>"> Ingresar </a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('juegos');?>"> Juegos </a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('descripcion');?>"> Descripcion </a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('about');?>"> Acerca de Nosotros </a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="<?php echo route_to('contacto');?>"> Contacto </a></li>
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
        Creado por <a href="<?php echo route_to('about');?>">Yines</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
	<script src="<?php echo base_url(RECURSOS. '/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/aos/aos.js'); ?>></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
	<script src="<?php echo base_url(RECURSOS. '/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
	<script src="../<?php echo base_url(RECURSOS. '/js/main.js'); ?>"></script>

</body>

</html>
