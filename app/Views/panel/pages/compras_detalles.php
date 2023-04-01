<?= $this->extend('base/base') ?>

<?= $this->section("css") ?>
<?= $this->endSection(); ?>
<?= $this->section("contenido") ?>

<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulario de Venta</h3>
          </div>


          <?= form_open_multipart("editar_compra", ['id' => 'form-compras']); ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <?php
                  $data = array(
                    'type' => 'hidden',
                    'name' => 'id_venta',
                    'class' => 'form-control',
                    'id' => 'id_venta',
                    'value' => $venta['id_venta']
                  );
                  echo form_input($data);
                  ?>

                  <label for="exampleInputEmail1">Id del usuario</label>

                  <?php

                  $parametro = array('class' => 'form-control', 'id' => 'id_usuario', 'name' => 'id_usuario');
                  echo form_dropdown("id_usuario", $id_usuarios, $usuario_actual, $parametro);
                  ?>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Id de Boleto</label>

                  <?php
                  $parametro = array('class' => 'form-control', 'id' => 'id_boleto', 'name' => 'id_boleto');
                  echo form_dropdown("id_boleto", $id_boletos, $boleto_actual, $parametro);

                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Precio Boleto</label>
                  <?php
                  $data = [
                    'name' => 'precio_boleto',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'precio_boleto',
                    'value' => $venta['precio_boleto']
                  ];
                  echo form_input($data);
                  ?>


                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cantidad</label>
                  <?php
                  $data = [
                    'name' => 'cantidad',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'cantidad',
                    'value' => $venta['cantidad']
                  ];
                  echo form_input($data);
                  ?>




                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Total de Venta</label>
                  <?php
                  $data = [
                    'name' => 'total_venta',
                    'class' => 'form-control',
                    'type' => 'number',
                    'id' => 'total_venta',
                    'value' => $venta['total_venta']
                  ];
                  echo form_input($data);
                  ?>




                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de Venta</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <!-- <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/> -->

                    <?php
                    $data = [
                      'name' => 'fecha_venta',
                      'class' => 'form-control datetimepicker-input',
                      // 'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'fecha_venta',
                      'data_target' => '#reservationdate"',
                      'value' => $venta['fecha_venta']
                    ];
                    echo form_input($data);
                    ?>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>



                  </div>
                </div>



              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Id Metodo de Pago</label>

                <?php
                $parametro = array('class' => 'form-control', 'id' => 'id_metodoPago', 'name' => 'id_metodoPago');
                echo form_dropdown("id_metodoPago", $id_metodopagos, $metodopago_actual, $parametro);
                ?>


              </div>
            </div>

          </div>

          <div class="card-footer">


            <?= form_submit('Editar', 'Editar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
            <a href="/compras" class="btn btn-danger">Cancelar</a>
          </div>

          <?= form_close(); ?>
        </div>
      </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>


<?= $this->endSection(); ?>
<?= $this->section("recursos") ?>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/compras_detalles.js'); ?>" )></script>


<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<!-- Code injected by live-server -->
<script type="text/javascript">
  // <![CDATA[  <-- For SVG support
  if ('WebSocket' in window) {
    (function() {
      function refreshCSS() {
        var sheets = [].slice.call(document.getElementsByTagName("link"));
        var head = document.getElementsByTagName("head")[0];
        for (var i = 0; i < sheets.length; ++i) {
          var elem = sheets[i];
          head.removeChild(elem);
          var rel = elem.rel;
          if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
          }
          head.appendChild(elem);
        }
      }
      var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
      var address = protocol + window.location.host + window.location.pathname + '/ws';
      var socket = new WebSocket(address);
      socket.onmessage = function(msg) {
        if (msg.data == 'reload') window.location.reload();
        else if (msg.data == 'refreshcss') refreshCSS();
      };
      console.log('Live reload enabled.');
    })();
  }
  // ]]>
</script>



<?= $this->endSection(); ?>