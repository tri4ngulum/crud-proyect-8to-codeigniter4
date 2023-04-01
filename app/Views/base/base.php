<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | <?= $nombre_pagina ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" \App\Controllers\>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL . '/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" <?php echo base_url(RECURSOS_PLUGINS .  '/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" <?php echo base_url(RECURSOS_PLUGINS . '/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <!-- <link rel="stylesheet" href=" <?php echo base_url(RECURSOS_PLUGINS . '/plugins/summernote/summernote-bs4.min.css'); ?>"> -->

  <!-- Toastr -->
  <link href="<?= base_url(RECURSOS_PLUGINS . '/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet">

  <?= $this->renderSection("css") ?>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(RECURSOS_PLUGINS . '/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="tooltip" href="<?= route_to('perfil') ?>" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Perfil" href="<?= route_to("perfil") ?>">
            <i class="fas fa-user"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" data-toggle="tooltip" data-placement="top" title="Pantalla" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Cerrar sesión" href="<?= route_to('cerrar'); ?>" role="button">
            <i class="fas fa-sign-in-alt"></i>
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <!-- <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul> -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
        <img src="<?php echo base_url(RECURSOS_PLUGINS . '/img/AdminLTELogo.png'); ?>" alt="C R U D" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">C R U D</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= $foto_usuario ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= route_to('perfil') ?>" class="d-block"><?= $nombre_usuario ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <?= $menu ?>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

          <?= $breadcrumb ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">


        <?= $this->renderSection("contenido") ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- ChartJS -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/chart.js/Chart.min.js'); ?>"></script> -->
  <!-- Sparkline -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/sparklines/sparkline.js'); ?>"></script> -->
  <!-- JQVMap -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script> -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script> -->
  <!-- jQuery Knob Chart -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script> -->


  <!-- daterangepicker -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/moment/moment.min.js'); ?>"></script>
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/daterangepicker/daterangepicker.js'); ?>"></script> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
  <!-- Summernote -->
  <!-- <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/summernote/summernote-bs4.min.js'); ?>"></script> -->
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/js/adminlte.js'); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/js/demo.js'); ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(RECURSOS_PLUGINS . '/js/pages/dashboard.js'); ?>"></script>


  <!-- jquery-validation -->
  <script src="<?php echo base_url(RECURSOS_PANEL . '/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url(RECURSOS_PANEL . '/plugins/jquery-validation/additional-methods.min.js'); ?>"></script>


  <!-- Toastr -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/toastr/toastr.min.js'); ?>"></script>

  <script>
    //Toastr show
    <?= mostrar_mensaje(); ?>
  </script>


  <!-- Select2 -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/select2/js/select2.full.min.js'); ?>"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
  <!-- InputMask -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/moment/moment.min.js'); ?>"></script>
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
  <!-- date-range-picker -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
  <!-- bootstrap color picker -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
  <!-- BS-Stepper -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/bs-stepper/js/bs-stepper.min.js'); ?>"></script>
  <!-- dropzonejs -->
  <script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/dropzone/min/dropzone.min.js'); ?>"></script>
  <?= $this->renderSection("recursos") ?>

</body>

</html>