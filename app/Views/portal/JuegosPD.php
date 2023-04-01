<html>
    
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interline - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
		<link href="<?php echo base_url(IMG. '<?php echo base_url(IMG. '/favicon.png'); ?>" rel="icon">
		<link href="<?php echo base_url(IMG. '<?php echo base_url(IMG. '/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

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
        <h1 class="text-light"><a href="/inicio"><span>Interline</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.php"><img src="<?php echo base_url(IMG. '/logo.png'); ?>" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <!-- Navegador dinamico -->
        <?php echo create_navbar('pages','');?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Juegos</h2>
          <ol>
            <li><a href="/inicio">Index</a></li>
            <li>Juegos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos los juegos</li>
              <li data-filter=".filter-familiar">Juego Familiar</li>
              <li data-filter=".filter-infantil">Juegos Infantiles</li>
              <li data-filter=".filter-xtremo">Juegos Xtremos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-familiar ">
            <div class="portfolio-item">
				<img src="<?php echo base_url(IMG. '/portfolio/aquaman.jpeg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>Aquaman</h3>
                <div>
				<a href="<?php echo base_url(IMG. '<?php echo base_url(IMG. '/portfolio/aquaman.jpeg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="familiar 1"><i class="bx bx-plus"></i></a>
                  <a href="php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-xtremo">
            <div class="portfolio-item">
						<img src="<?php echo base_url(IMG. '<?php echo base_url(IMG. '/portfolio/batman-the-ride.jpg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>Batman The Ride</h3>
                <div>
						<a href="<?php echo base_url(IMG. '<?php echo base_url(IMG. '/portfolio/batman-the-ride.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="xtremo 3"><i class="bx bx-plus"></i></a>
                  <a href="/descripcion" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-familiar">
            <div class="portfolio-item">
						<img src="<?php echo base_url(IMG. '/portfolio/sfmx_pinas_locas.jpg'); ?>" class="img-fluid" alt="" width="100%" >
              <div class="portfolio-info">
                <h3>Piñas Locas</h3>
                <div>
						<a href="<?php echo base_url(IMG. '/portfolio/sfmx_pinas_locas.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="familiar 2"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-infantil">
            <div class="portfolio-item">
						<img src="<?php echo base_url(IMG. '/portfolio/dsc.jpg'); ?>" class="img-fluid" alt="" width="356px">
              <div class="portfolio-info">
                <h3>ACME Trucking Company</h3>
                <div>
						<a href="<?php echo base_url(IMG. '/portfolio/dsc.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="infantil 2"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-xtremo">
            <div class="portfolio-item">
						<img src="<?php echo base_url(IMG. '/portfolio/sfmx_superman_el_ultimo_escape.jpg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>Superman El Ultimo Escape</h3>
                <div>
						<a href="<?php echo base_url(IMG. '/portfolio/sfmx_superman_el_ultimo_escape.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="xtremo 2"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-familiar">
            <div class="portfolio-item">
						<img src="<?php echo base_url(IMG. '/portfolio/sfmx_the_dark_knight_coaster.jpg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>The Dark Knight Coaster</h3>
                <div>
						<a href="<?php echo base_url(IMG. '/portfolio/sfmx_the_dark_knight_coaster.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="familiar 3"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-infantil">
            <div class="portfolio-item">
								<img src="<?php echo base_url(IMG. '/portfolio/baticopteros.jpg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>Batman Baticopteros</h3>
                <div>
								<a href="<?php echo base_url(IMG. '/portfolio/baticopteros.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="infantil 1"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-infantil">
            <div class="portfolio-item">
								<img src="<?php echo base_url(IMG. '/portfolio/superherogirls.jpg'; ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>DC Super Hero Girls</h3>
                <div>
								<a href="<?php echo base_url(IMG. '/portfolio/superherogirls.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="infantil 3"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-xtremo">
            <div class="portfolio-item">
									<img src="<?php echo base_url(IMG. '/portfolio/sfmx_skyscreamer.jpg'); ?>" class="img-fluid" alt="" width="100%">
              <div class="portfolio-info">
                <h3>Supergril Sky Flight</h3>
                <div>
	<a href="<?php echo base_url(IMG. '/portfolio/sfmx_skyscreamer.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="xtremo 1"><i class="bx bx-plus"></i></a>
                  <a href="?php echo redirections2('','descripcion');?>" title="Descripcion"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
        Creado por <a href="/about">Yines</a>
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
