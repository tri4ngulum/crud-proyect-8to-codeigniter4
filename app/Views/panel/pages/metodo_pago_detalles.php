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
                  <h3 class="card-title">Formulario de metodos de pago detalles</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

      <?= form_open('editar_metodopago', ['id' => 'form-metodoPago']);?>
                  <div class="card-body">
                    <div class="row">
                      
    <?php 
                    $data = array(
                      'name' => 'id_metodopago',
                      'class' => 'form-control',
                      'type' => 'hidden',
                      'id' => 'id_metodopago',
                      'value' => $metodopago['id_metodoPago']
                    );
                    echo form_input($data);
                  ?>



                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre del dueño</label>
<?php 
                    $data = [
                      'name' => 'nombre_metodopago',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'nombre_metodopago',
                      'value' => $metodopago['nombre_metodoPago']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Clave</label>
<?php 
                    $data = [
                      'name' => 'clave_metodopago',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'clave_metodopago',
                      'value' => $metodopago['clave_metodoPago']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dia de caducidad</label>
<?php 
                    $data = [
                      'name' => 'dia_metodopago',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'dia_metodopago',
                      'value' => $metodopago['dia_metodoPago']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Año de caducidad</label>
<?php 
                    $data = [
                      'name' => 'year_metodopago',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'year_metodopago',
                      'value' => $metodopago['year_metodoPago']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">CVE</label>
<?php 
                    $data = [
                      'name' => 'cve_metodopago',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'cve_metodopago',
                      'value' => $metodopago['cve_metodoPago']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                <?= form_submit('Editar', 'Editar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
                      <a href="/metodospago" class="btn btn-danger">Cancelar</a>
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

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/metodo_pago_detalles.js'); ?>")></script>
<?= $this->endSection(); ?>

