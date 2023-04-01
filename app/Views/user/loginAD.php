


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS. '/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS. '/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PLUGINS. '/css/adminlte.min.css'); ?>">

  <!-- Toastr -->
<link href="<?= base_url(RECURSOS_PLUGINS. '/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet"> 


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>


      <?= form_open('validar_credenciales', ['id' => 'form-login']);?>

      <div class="form-group">
        <div class="input-group mb-3">
                
                <?php
                  $data = [
                    'name' => 'email',
                    'type' => 'email',
                    'class' => 'form-control',
                    'placeholder' => 'hola@dominio.com'
                  ];
                  echo form_input($data);
                ?>

          <!-- <input type="email" class="form-control" placeholder="Email"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
      
                </div> 
        <div class="form-group">
        <div class="input-group mb-3">

                  <?php 
                    $data = [
                      'name' => 'password',
                      'class' => 'form-control',
                      'type' => 'password'
                    ];
                    echo form_input($data);
                  ?>


          <!-- <input type="password" class="form-control" placeholder="Password"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
      </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="remember">
              </label>
            </div>
          </div>
      
          <!-- /.col -->
          <div class="col-4">
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
                <?= form_submit('ingresar', 'Sign In', ['class' => 'btn btn-primary btn-block', 'type' => 'submit']); ?>
          </div>
          <!-- /.col -->
        </div>
                <?= form_close(); ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(RECURSOS_PANEL. '/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- jquery-validation -->
<script src="<?php echo base_url(RECURSOS_PANEL. '/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url(RECURSOS_PANEL. '/plugins/jquery-validation/additional-methods.min.js'); ?>"></script>


<!-- Bootstrap 4 -->
<script src="<?php echo base_url(RECURSOS_PANEL. '/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(RECURSOS_PANEL. '/js/adminlte.min.js'); ?>"></script>


  <!-- Toastr -->
<script src="<?= base_url(RECURSOS_PLUGINS. '/plugins/toastr/toastr.min.js'); ?>"></script>

<script src="<?= base_url(RECURSOS_ESPECIFICO. '/login.js'); ?>")></script>

<script>
  //Toastr show
<?= mostrar_mensaje(); ?>
</script>



</body>
</html>
