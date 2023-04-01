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


<?= $this->endSection(); ?>
<?= $this->section("contenido") ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <a href="/addcompras" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de compras</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="tabla-compras" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tipo de boleto</th>
                  <th>Cantidad</th>
                  <th>Precio de cada boleto</th>
                  <th>Total pagado</th>
                  <th>Fecha de venta</th>
                  <th>Clave del metodo Pago</th>

                  <?php
                  $session = session();

                  if ($session->rol_actual != ROL_USUARIO["clave"]) {
                    $html = '<th>Opciones</th>';
                    echo $html;
                  }

                  ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $html = '';
                if (!empty($ventas)) {
                  $html = '';
                  $numero = 0;
                  foreach ($ventas as $venta) {
                    $html .= '
                                                <tr>
                                                    <td>' . ++$numero . '</td>
                                                    <td>' . $venta["nombre_boleto"] .  '</td>
                                                    <td>' . $venta["cantidad"] . '</td>
                                                    <td>' . $venta["precio_boleto"] . ' </td>
                                                    <td>' . $venta["total_venta"] . ' </td>
                                                    <td>' . $venta["fecha_venta"] . ' </td>
                                                <td>' . $venta["nombre_metodoPago"] . ' </td>
                                              ';

                    if ($session->rol_actual != ROL_USUARIO["clave"]) {


                      $html .= '<td>
                                                      <a href="' . route_to("compras_detalles", $venta['id_venta']) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                                                      
                                                      <button class="btn btn-danger eliminar" id="' . $venta['id_venta'] . '"><i class="fas fa-times-circle"></i> Eliminar </button>                                                      

                                                      </td>
                                                      </tr>
                                                      ';
                    } else {
                      $html .= '</tr>';
                    }
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


<?= $this->section("recursos") ?>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/compras.js'); ?>" )></script>


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

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/tabla_compras.js') ?>"></script>
<?= $this->endSection(); ?>