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
            <h3 class="card-title">Formulario de usuario detalles</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

<?= form_open_multipart("editar_usuario",['id' => 'form-usuario']); ?> 
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="preview">
                  <center>
                    <?php $foto_perfil =  (!is_null($usuario['imagen_usuario']) ? base_url(RECURSOS_IMAGENES_USUARIO."/".$usuario['imagen_usuario']) : (
                              ($usuario['sexo_usuario'] == SEXO_MASCULINO['clave']) ? base_url(RECURSOS_IMAGENES_USUARIO."/male.png")
                              : base_url(RECURSOS_IMAGENES_USUARIO."/female.png")));?> 
                              
                    <img src="<?= $foto_perfil ?>"   class="img-rounded" alt="" id="file-ip-1-preview" width="20%">
                    <?php
                      $data = array(
                        'type' => 'hidden',
                        'name' => 'id_usuario',
                        'class' => 'form-control',
                        'id' => 'id_usuario',
                        'value' => $usuario['id_usuario']
                      );
                      echo form_input($data);

                      if(!is_null($usuario['imagen_usuario'])){
                        $data = array(
                          'type' => 'hidden',
                          'name' => 'foto_anterior',
                          'class' => 'form-control',
                          'id' => 'foto_anterior',
                          'value' => $usuario['imagen_usuario']
                        );

                        echo form_input($data);
                      }
                    ?>
                  </center>
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre(s)</label>
                    <?php
                    $data = [
                      'name' => 'nombre',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'Nombre',
                      'placeholder' => 'Nombre(s)',
                      'value' => $usuario['nombre_usuario']
                    ];
                    echo form_input($data);
                    ?>




                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>

                    <?php
                    $data = [
                      'name' => 'apellido_paterno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_paterno',
                      'placeholder' => 'Apellido Paterno',
                      'value' => $usuario['ap_paterno_usuario']
                    ];
                    echo form_input($data);
                    ?>


                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <?php
                    $data = [
                      'name' => 'apellido_materno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_materno',
                      'placeholder' => 'Apellido Materno',
                      'value' => $usuario['ap_materno_usuario']
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

                <?php 
                    $data = [
                      'name' => 'sexo',
                      'class' => 'form-check-input',
                      'value' => 2,
                      'checked' => ($usuario['sexo_usuario'] == 2) ? true : false
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
                      'checked' => ($usuario['sexo_usuario'] == 1) ? true : false
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
                            echo form_dropdown("rol",["" => "Selecciona un rol"]+ROLES,$usuario['id_rol'], $parametro);
                          ?>
                  
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo electrónico</label>
                    <?php
                    $data = [
                      'name' => 'email',
                      'class' => 'form-control',
                      'type' => 'email',
                      'id' => 'email',
                      'value' => $usuario['email_usuario']
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
                    <?php
                    $data = [
                      'name' => 'password',
                      'class' => 'form-control',
                      'type' => 'password',
                      'id' => 'password',
                      'placeholder' => '*********',
                    ];
                    echo form_input($data);
                    ?>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Repetir Contraseña</label>
                    <?php
                    $data = [
                      'name' => 'reppassword',
                      'class' => 'form-control',
                      'type' => 'password',
                      'id' => 'repassword',
                      'placeholder' => '*********',
                    ];
                    echo form_input($data);
                    ?>


                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="exampleInputEmail1">Foto perfil</label>
                  
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

              <?= form_submit('Guardar', 'Guardar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
              <a href="/usuarios" class="btn btn-danger">Cancelar</a>
            </div>

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

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/cargar_imagen.js'); ?>")></script>
<script src="<?= base_url(RECURSOS_ESPECIFICO . '/usuario_detalles.js'); ?>" )></script>
<?= $this->endSection(); ?>