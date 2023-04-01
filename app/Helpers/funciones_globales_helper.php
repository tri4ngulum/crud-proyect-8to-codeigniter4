<?php

    function breadcrumb($tarea = '', $breadcrub = array()){
        // dd($breadcrub);
        $html = '';
        $html .= '<div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">'.$tarea.'</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="'.route_to("dashboard").'">Home</a></li>';
                foreach ($breadcrub as $nav){
                    if($nav["href"] != '#'){
                       $html.= '<li class="breadcrumb-item active"><a href="'.$nav["href"].'">'.$nav["tarea"].'</a></li>';
                    } 
                    else {
                       $html.= '<li class="breadcrumb-item ">'.$nav["tarea"].'</li>';
                    }
                }
                $html.= '
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->';

        return $html;
    }

    function mensaje($texto = '', $tipo = 5, $tiempo = 1000){
      $mensaje = array();
      $mensaje['texto'] = $texto;
      $mensaje['tipo'] = $tipo;
      $mensaje['tiempo'] = $tiempo;
      session()->set('mensaje',$mensaje);
    }

    function mostrar_mensaje(){
      $html = '';
      $session = session();
      $mensaje = $session->get("mensaje");
      $session->set("mensaje", null);
   
      if($mensaje == null){
        return "";
      }

      switch($mensaje['tipo']){
        case ALERT_SUCCESS:
          $tipoMensaje = "success";
          $titulo = "Correcto";
          break;
        case ALERT_DANGER:
          $tipoMensaje = "error";
          $titulo = "Error";
          break;
        case ALERT_WARNING:
          $tipoMensaje = "warning";
          $titulo = "Warning";
          break;
          default:
          $tipoMensaje = "info";
          $titulo = "Info";
          break;
      }

      $html = '
            toastr["'.$tipoMensaje.'"]("'.$mensaje["texto"].'", "'.$titulo.'", { 
   "closeButton": true,
   "progressBar": true,
   "positionClass": "toast-top-center",
   "showDuration": "'.$mensaje["tiempo"].'",
   "hideDuration": "1000",
   "timeOut": "5000",
   "extendedTimeOut": "1000",
   "showMethod": "fadeIn",
   "hideMethod": "fadeOut"
        });
      ';


      return $html;
  }

