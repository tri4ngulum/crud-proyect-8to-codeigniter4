<?= $this->extend('base/base') ?>

<?= $this->section("css") ?>
<?= $this->endSection(); ?>
<?= $this->section("contenido") ?>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulario de usuario nuevo</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <!-- <form id="form-usuario" action="../backend/crud/usuarios/insert_usuario.php" method="post" enctype="multipart/form-data"> -->
          <?= form_open_multipart("registrar_usuario", ['id' => 'form-usuario']); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <div class="preview">
                    <img src="<?php echo base_url(RECURSOS_IMAGENES_USUARIO . '/male.png'); ?>" class="img-rounded" alt="" id="file-ip-1-preview" width="20%">
                  </div>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre(s)</label>
                  <!-- <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre(s)"> -->
                  <?php
                  $data = [
                    'name' => 'nombre',
                    'class' => 'form-control',
                    'type' => 'text',
                    'id' => 'Nombre',
                    'placeholder' => 'Nombre(s)'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Paterno</label>
                  <!-- <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno" placeholder="Apelldio Paterno"> -->
                  <?php
                  $data = [
                    'name' => 'apellido_paterno',
                    'class' => 'form-control',
                    'type' => 'text',
                    'id' => 'apellido_paterno',
                    'placeholder' => 'Apellido Paterno'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Materno</label>
                  <!-- <input type="text" name="apellido_materno" class="form-control" id="apellido_materno" placeholder="Apelldio Paterno"> -->
                  <?php
                  $data = [
                    'name' => 'apellido_materno',
                    'class' => 'form-control',
                    'type' => 'text',
                    'id' => 'apellido_materno',
                    'placeholder' => 'Apellido Materno'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Sexo</label>
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="radio" name="sexo" value="2"> -->
                    <?php
                    $data = [
                      'name' => 'sexo',
                      'class' => 'form-check-input',
                      'value' => 2,
                    ];
                    echo form_checkbox($data);
                    ?>
                    <label class="form-check-label">Femenino</label>
                  </div>
                  <div class="form-check">
                    <?php
                    $data = [
                      'name' => 'sexo',
                      'class' => 'form-check-input',
                      'value' => 1,
                    ];
                    echo form_checkbox($data);
                    ?>


                    <label class="form-check-label">Masculino</label>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Rol</label>
                  <?php
                  $parametro = array('class' => 'form-control', 'id' => 'rol', 'name' => 'rol');
                  echo form_dropdown("rol", ["" => "Selecciona un rol"] + ROLES, array(), $parametro);
                  ?>
                  <!-- <select class="form-control" name="rol">
                            <option value="">Seleccionar un rol</option>
                            <option value="795">Administrador</option>
                            <option value="888">Operador</option>
                          </select> -->
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo electrónico</label>
                  <!-- <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico"> -->
                  <?php
                  $data = [
                    'name' => 'email',
                    'class' => 'form-control',
                    'type' => 'email',
                    'id' => 'email',
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña</label>
                  <!-- <input type="password" name="password" class="form-control" id="password" placeholder="***********"> -->
                  <?php
                  $data = [
                    'name' => 'password',
                    'class' => 'form-control',
                    'type' => 'password',
                    'id' => 'password',
                    'placeholder' => '*********'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Repetir Contraseña</label>
                  <!-- <input type="password" name="repassword" class="form-control" id="repassword" placeholder="***********"> -->
                  <?php
                  $data = [
                    'name' => 'reppassword',
                    'class' => 'form-control',
                    'type' => 'password',
                    'id' => 'repassword',
                    'placeholder' => '*********'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Foto perfil</label>
                <!-- <input type="file" name="foto_perfil" onchange="previsualizar_imagen('previsualizar_imagen','foto-input')" class="form-control" id="foto-input"> -->
                <?php
                $data = array(
                  'type' => 'file',
                  'name' => 'foto_perfil',
                  'id' => 'file-ip-1',
                  'accept' => 'image/*',
                  'class' => 'form-control',
                  'onchange' => 'showPreview(event);'
                );
                echo form_input($data);
                ?>

              </div>
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">

            <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->

            <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
            <a href="/usuarios" class="btn btn-danger">Cancelar</a>
          </div>

          <!-- </form> -->

          <?= form_close(); ?>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>




<?= $this->endSection(); ?>


<?= $this->section("recursos") ?>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/usuario_nuevo.js'); ?>" )></script>
<script src="<?= base_url(RECURSOS_ESPECIFICO . '/cargar_imagen.js'); ?>" )></script>
<?= $this->endSection(); ?>