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
              <a href="/addboletos" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
              <div class="card">
                <div class="card-header">
                  <center>
                    <h3 class="card-title">Lista de Boletos</h3>
                  </center>
                </div>
                <div class="card-body">
                  <table id="table-boletos" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $html = '';
                      if(!empty($boletos)){
                        $html = '';
                        $numero = 0;
                        foreach ($boletos as $boleto){
                           $html .= '
                                                <tr>
                                                    <td>' . ++$numero . '</td>
                                                    <td>' . $boleto["nombre_boleto"] . '</td>
			                                              <td>' . $boleto["precio_boleto"] . '</td>
			                                              <td>' . $boleto["fecha"] . '</td>
                                                    <td>';
                                               
                           $html .= '
                                                      <a href="' . route_to("boleto_detalles", $boleto['id_boleto']) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                                                      
                                                      <button class="btn btn-danger eliminar" id="' . $boleto['id_boleto'] . '"><i class="fas fa-times-circle"></i> Eliminar </button>                                                      

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

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/tabla_boletos.js') ?>"></script>
<?= $this->endSection(); ?>