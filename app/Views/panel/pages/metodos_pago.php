<?= $this->extend('base/base') ?>

<?= $this->section("css") ?>

<!-- DATATABLES -->
<link rel="stylesheet" href="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

<!-- SWEETALERT2 -->
<link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css " rel="stylesheet">
<?= $this->endSection(); ?>
<?= $this->section("contenido") ?>

     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <a href="/addmetodos_pago" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
              <div class="card">
                <div class="card-header">
                  <center>
                    <h3 class="card-title">Lista de metodosPago</h3>
                  </center>
                </div>
                <div class="card-body">
                  <table id="tabla-metodospago" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre de dueño</th>
                        <th>Clave</th>
                        <th>Dia</th>
                        <th>Año</th>
                        <th>CVE</th>
                        <th>Opcion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $html = '';
                      if (isset($metodosPago) && sizeof($metodosPago) > 0) {
                        $num = 0;
                        foreach ($metodosPago as $metodoPago) {
                          $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $metodoPago["nombre_metodoPago"] .  '</td>
                                                    <td>' . $metodoPago["clave_metodoPago"] . '</td>
                                                    <td>' . $metodoPago["dia_metodoPago"] . ' </td>
                                                    <td>' . $metodoPago["year_metodoPago"] . ' </td>
                                                    <td>' . $metodoPago["cve_metodoPago"] . ' </td>
                                                    <td>';
                           $html .= '
                                                      <a href="' . route_to("metodo_pago_detalles", $metodoPago['id_metodoPago']) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                                                      
                                                      <button class="btn btn-danger eliminar" id="' . $metodoPago['id_metodoPago'] . '"><i class="fas fa-times-circle"></i> Eliminar </button>                                                      

                                                      </td>
                                                      </tr>
                                                      ';

                        }
                      }
                      echo $html;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?= $this->endSection(); ?>

<?= $this->section('recursos') ?>

<script>
  let path = '<?= base_url(""); ?>';
</script>

<!-- DATA TABLES -->
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PLUGINS . '/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>

<!-- SWEETALERT2 -->
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
"></script>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/funciones.js') ?>"></script>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/tabla_metodopago.js') ?>"></script>
<?= $this->endSection(); ?>