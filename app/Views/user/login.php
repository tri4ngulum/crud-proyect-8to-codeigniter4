
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interline - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
        <h1 class="text-light"><a href="/index"><span>Interline</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <!-- Navegador dinamico -->
        <?php echo create_navbar('pages', ''); ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ingresar</h2>
          <ol>
            <li><a href="/index"> Inicio</a></li>
            <li>Ingresar</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section>
      <div class="container py-5 h-100" id="divLogin">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="img/login.svg" class="img-fluid" alt="Phone image">
            <div class="d-flex justify-content-around align-items-center mb-4">
              <p><br> ¿No tienes una Cuenta? </p>
            </div>
            <?php if (!empty($message)) : ?>
              <p> <?= $message ?></p>
            <?php endif; ?>

            <!-- Submit button -->
            <div class="d-flex justify-content-around align-items-center mb-4">
              <button type="submit" class="btn btn-primary btn-lg btn-block align-items-center" id="linkpararegistrarse" onclick="registrarse();">Registrate</button>
            </div>
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

      <?= form_open('validar_credenciales', ['id' => 'form-login']);?>
              <div class="section-title">
                <h2>Iniciar Sesión</h2>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <?php
                  $data = [
                    'name' => 'email',
                    'type' => 'email',
                    'class' => 'form-control',
                    'placeholder' => 'hola@dominio.com'
                  ];
                  echo form_input($data);
                ?>

                <label class="form-label" for="form1Example13">Email address</label>

              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">

                  <?php 
                    $data = [
                      'name' => 'password',
                      'class' => 'form-control',
                      'type' => 'password'
                    ];
                    echo form_input($data);
                  ?>


                <label class="form-label" for="form1Example23">Password</label>
              </div>

              <div class="d-flex justify-content-around align-items-center mb-4">
              </div>

              <!-- Submit button -->
              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- <button type="submit" class="btn btn-primary btn-lg btn-block align-items-center">Iniciar Sesión</button> -->

                <?= form_submit('ingresar', 'Sign In', ['class' => 'btn btn-primary btn-lg btn-block align-items-center', 'type' => 'submit']); ?>
              </div>


              <div class="d-flex justify-content-around align-items-center mb-4">
              </div>

              <!-- Continuar con  -->

                <?= form_close(); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Registrate -->
    <section>
      <div class="container py-5 h-100 " id="divRegistrarme" style="display: none;">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="img/login.svg" class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form id="registraUsuario" method="POST">
              <div class="section-title">
                <h2>Registrarme</h2>
              </div>

              <!-- Nombre -->
              <div class="form-outline mb-4">
                <input type="text" name="Name" class="form-control form-control-lg" id="nombre" />
                <label class="form-label" for="form1Example13">Nombre</label>
              </div>
              <!-- APP -->
              <div class="form-outline mb-4">
                <input type="text" name="AP" class="form-control form-control-lg" id="app" />
                <label class="form-label" for="form1Example134">Apellido Paterno</label>
              </div>

              <!-- APM -->
              <div class="form-outline mb-4">
                <input type="text" name="AM" class="form-control form-control-lg" id="apm" />
                <label class="form-label" for="form1Example135">Apellido Materno</label>
              </div>


              <!-- Sexo input -->
                <div class="form-outline md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sexo</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sexo" value="2">
                      <label class="form-check-label">Femenino</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sexo" value="1" >
                      <label class="form-check-label">Masculino</label>
                    </div>
                  </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="emailR" class="form-control form-control-lg" id="email" />
                  <label class="form-label" for="form1Example136">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="passwordR" class="form-control form-control-lg" id="Password" />
                  <label class="form-label" for="form1Example23">Contraseña</label>
                </div>

                <!-- Repassword input -->
                <div class="form-outline mb-4">
                  <input type="password" name="repasswordR" class="form-control form-control-lg" id="repassword" onkeyup="validatePassword();" />
                  <label class="form-label" for="form1Example234">Vuelve a escribir la contraseña</label>
                </div>

                <!-- Aviso Completar campos -->
                <div>
                  <small id="notificaciones" class="text-danger"></small>
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <input type="submit" class="btn btn-primary btn-lg btn-block align-items-center" value="Submit">
                  <!-- <button type="submit" class="btn btn-primary btn-lg btn-block align-items-center" id="registrar" >Registrate</button> -->
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="/index"> Inicio </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/acceso"> Ingresar </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="juegos"> Juegos </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/"> Descripcion </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/"> Acerca de Nosotros </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/"> Contacto </a></li>
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
        Creado por <a href="/contact">Yines</a>
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
  <script src="../helper/Login.js"></script>

</body>

</html>