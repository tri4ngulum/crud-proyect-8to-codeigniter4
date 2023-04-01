<?= $this->extend('base/base'); ?>

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
        <a href="/addusuarios" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de Usuarios</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="tabla-usuarios" name="tabla-usuarios" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Usuario</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php

                if (!empty($usuarios)) {
                  $html = '';
                  $numero = 0;
                  foreach ($usuarios as $usuario) {
                    $foto_perfil = (!is_null($usuario['imagen_usuario']) ? base_url(RECURSOS_IMAGENES_USUARIO . "/" . $usuario['imagen_usuario']) : (
                      ($usuario['sexo_usuario'] == SEXO_MASCULINO['clave']) ? base_url(RECURSOS_IMAGENES_USUARIO . "/male.png")
                      : base_url(RECURSOS_IMAGENES_USUARIO . "/female.png")));
                    $html .= '
                                                  <tr>
                                                      <td>' . ++$numero . '</td>
                                                    <td><img class="" width="50px" src="' . $foto_perfil . '"></td>
                                                    <td>' . $usuario['nombre_usuario'] . ' ' . $usuario['ap_paterno_usuario'] . '</td>
                                                    <td>' . $usuario['rol'] . '</td>
                                                    <td>';
                    if ($usuario['estatus_usuario'] == ESTATUS_DESHABILITADO) {
                      $html .= '
                                                        <button href="" class="btn btn-success estatus" id="' . $usuario['id_usuario'] . '_' . ESTATUS_HABILITADO . '"><i class="fas fa-universal-access"></i> Habilitar </button>';
                    } else {
                      $html .= '<button href="" class="btn btn-dark estatus" id="' . $usuario['id_usuario'] . '_' . ESTATUS_DESHABILITADO . '"><i class="fas fa-low-vision"></i> Deshabilitar </button>';
                    }
                    $html .= '
                                                      <a href="' . route_to("usuario_detalles", $usuario['id_usuario']) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                                                      
                                                      <button class="btn btn-danger eliminar" id="' . $usuario['id_usuario'] . '"><i class="fas fa-times-circle"></i> Eliminar </button>                                                      

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

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/tabla_usuario.js') ?>"></script>
<?= $this->endSection(); ?>