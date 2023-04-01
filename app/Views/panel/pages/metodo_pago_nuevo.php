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
            <h3 class="card-title">Formulario de metodos de pago</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!-- <form id="form-metodoPago" action="../backend/crud/metodosPago/insert_metodoPago.php" method="post" enctype="multipart/form-data"> -->

          <?= form_open('registrar_metodopago', ['id' => 'form-pago']); ?>

          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre del dueño</label>
                  <?php
                  $data = [
                    'name' => 'nombre_metodopago',
                    'class' => 'form-control',
                    'type' => 'text',
                    'id' => 'nombre_metodopago',
                    'placeholder' => 'Nombre(s)'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Clave</label>
                  <!-- <input type="text" name="clave_metodoPago" class="form-control" id="clave" placeholder="Clave"  -->

                  <?php
                  $data = [
                    'name' => 'clave_metodopago',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'clave_metodopago',
                    'placeholder' => 'Clave',
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
                  <!-- <input type="text" name="dia_metodoPago" class="form-control" id="dia" placeholder="Dia" required="required"> -->

                  <?php
                  $data = [
                    'name' => 'dia_metodopago',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'dia_metodopago',
                    'placeholder' => 'Dia'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Año de caducidad</label>
                  <!-- <input type="text" name="year_metodoPago" class="form-control" id="year_caducidad" placeholder="Año de caducidad" required="required">  -->

                  <?php
                  $data = [
                    'name' => 'year_metodopago',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'year_metodopago',
                    'placeholder' => 'Año de caducidad'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">CVE</label>
                  <!-- <input type="text" name="cve_metodoPago" class="form-control" id="cve" placeholder="CVE"  required="required"> -->

                  <?php
                  $data = [
                    'name' => 'cve_metodopago',
                    'class' => 'form-control',
                    'type' => 'text',
                    'id' => 'cve_metodopago',
                    'placeholder' => 'CVE'
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">

            <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
            <a href="/metodos_pago" class="btn btn-danger">Cancelar</a>
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

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/metodo_pago_nuevo.js'); ?>" )></script>
<?= $this->endSection(); ?>