<?php


namespace App\Controllers\Panel;

use App\Controllers\BaseController;


class Boletos extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_BOLETOS)) {
            $this->session->tarea_actual = TAREA_BOLETOS;
        } else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        }
    }


    private function crear_vista($nombre_vista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel();
        
        $session = session();

        if ($session->id_usuario == NULL) {
            return redirect()->to(route_to('/'));
        } else {
            return view($nombre_vista, $datos);
        }
    }

    private function cargar_datos($case)
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_BOLETOS;

        $datos['nombre_pagina'] = 'Dashboard';
        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Boletos';
        $datos['tarea'] = 'Boletos';

        switch ($case) {
            case 0:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Boletos',
                        'href' => '#'
                    )
                );
                break;
            case 1:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Boletos',
                        'href' => route_to('boletos')
                    ),
                    array(
                        'tarea' => 'Nuevo Boletos',
                        'href' => '#'
                    ),
                );
                break;
            case 2:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Boletos',
                        'href' => route_to('boletos')
                    ),
                    array(
                        'tarea' => 'Detalles Boletos',
                        'href' => '#'
                    ),
                );
                break;
        }


        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $tabla_boletos = new \App\Models\Tabla_boletos();
        $datos['boletos'] = $tabla_boletos->data_table_boletos();
        return $datos;
    }

    public function addBoleto()
    {
        return $this->crear_vista('panel/pages/boleto_nuevo', $this->cargar_datos(1));
    }

    public function detBoleto()
    {
        return $this->crear_vista('panel/pages/boleto_detalles', $this->cargar_datos(2));
    }

    public function index()
    {
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/boletos', $this->cargar_datos(0));
        } else {
            return redirect()->to(route_to('login'));
        }
    }

    public function registrar()
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();
        date_default_timezone_set('America/Mexico_City');
        $fechaActual = strtotime(date("d-m-Y"));

        $boleto = array();
        $boleto['id_boleto'] = $this->request->getPost("id_boleto");
        $boleto['nombre_boleto'] = $this->request->getPost("nombre_boleto");
        $boleto['precio_boleto'] = $this->request->getPost("precio_boleto");
        $boleto['fecha'] = $this->request->getPost("fecha");

        $encontro = $tabla_boletos->existe_boleto($boleto['nombre_boleto']);

        $fecha_comparar = strtotime($boleto['fecha']);
        // dd($fechaActual,$fecha_comparar);
        if ($encontro != FALSE) {
            mensaje("El boleto" . $boleto['nombre_boleto'] . " ya existe, por favor ingrese un nuevo boleto", ALERT_WARNING, "!Error al registrar!");
            return $this->index();
        } else {
            if ($fecha_comparar >= $fechaActual) {
                if ($tabla_boletos->insert($boleto) > 0) {
                    mensaje("El boleto ha sido registrado exitosamente.", ALERT_SUCCESS, "¡Registro exitoso!");
                    return redirect()->to(route_to('boletos'));
                } else {
                    mensaje("Hubo un error al registrar al boleto. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
                    return redirect()->to(route_to('boletos'));
                }
            } else {
                mensaje("Hubo un error por la fecha del boleto. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
                return redirect()->to(route_to('boletos'));
            }
        }
    }

    public function eliminar($id_boleto = 0)
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();

        if ($tabla_boletos->existe_boleto_id($id_boleto)) {
            if ($tabla_boletos->delete($id_boleto) > 0) {
                mensaje("El boleto ha sido eliminado exitosamente.", ALERT_SUCCESS, "¡Boleto eliminado!");
            } else {
                mensaje("Hubo un error al eliminar este boleto. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al eliminar boleto!");
                return $this->index($id_boleto);
            }
        } else {
            mensaje("Boleto no existe.", ALERT_DANGER, "¡Error al eliminar boleto!");
        }

        return redirect()->to(route_to('boletos'));
    }


    public function estatus($id_boleto = 0, $estatus = 0)
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();

        if ($tabla_boletos->existe_boleto_id($id_boleto)) {
            if ($estatus == 1 or $estatus == 2) {
                if ($tabla_boletos->update($id_boleto, ['estatus_boleto' => $estatus]) > 0) {
                    mensaje("El estatus del boleto ha sido actualizado exitosamente.", ALERT_SUCCESS, "¡Estatus actualizado!");
                } else {
                    mensaje("Hubo un error al acutalizar el estatus de este boleto. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar el estatus!");
                    return $this->index($id_boleto);
                }
            } else {

                mensaje("Valor del estatus no valido", ALERT_WARNING, "¡Error al actualizar el estatus!");
            }
        } else {

            mensaje("Boleto no existe", ALERT_DANGER, "¡Error al actualizar el estatus!");
        }
        return $this->index($id_boleto);
        return redirect()->to(route_to('boletos'));
    }
}
