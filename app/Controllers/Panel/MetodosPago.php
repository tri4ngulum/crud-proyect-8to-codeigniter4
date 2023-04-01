<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;


class MetodosPago extends BaseController
{

    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_METODOPAGO)) {
            $this->session->tarea_actual = TAREA_METODOPAGO;
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
        $session->tarea_actual = TAREA_METODOPAGO;

        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Metodos Pago';
        $datos['tarea'] = 'Metodos Pago';


        switch ($case) {
            case 0:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Metodos Pago',
                        'href' => '#'
                    )
                );
                break;
            case 1:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Metodos Pago',
                        'href' => route_to('metodos_pago')
                    ),
                    array(
                        'tarea' => 'Nuevo Metodos Pago',
                        'href' => '#'
                    ),
                );
                break;
            case 2:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Metodos Pago',
                        'href' => route_to('metodos_pago')
                    ),
                    array(
                        'tarea' => 'Detalles Metodos Pago',
                        'href' => '#'
                    ),
                );
                break;
        }


            $tabla_metodospago = new \App\Models\Tabla_metodospago;
        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        if ($session->rol_actual == ROL_USUARIO["clave"]) {
            $tabla_usuario_metodoPago = new \App\Models\Tabla_usuario_metodoPago();
            $ids = $tabla_usuario_metodoPago->data_id($session->id_usuario);

            $data_tabla = array();

            foreach ($ids as $id){
                $data_tabla[$id['id_metodoPago']]= $tabla_metodospago->data_table_metodopago_id($id['id_metodoPago']);            
            }
             
            $datos['metodosPago'] = $data_tabla;

        } else {
            $datos['metodosPago'] = $tabla_metodospago->data_table_metodopago();
        }
        return $datos;
    }

    public function addMetodosPago()
    {
        return $this->crear_vista('panel/pages/metodo_pago_nuevo', $this->cargar_datos(1));
    }

    public function detMetodosPago()
    {
        return $this->crear_vista('panel/pages/metodo_pago_detalles', $this->cargar_datos(2));
    }

    public function index()
    {
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/metodos_pago', $this->cargar_datos(0));
        } else {
            return redirect()->to(route_to('login'));
        }
    }

    private function subir_archivo($path = NULL, $file = NULL)
    {
        $file_name = $file->getRandomName();
        $file->move($path, $file_name);
        return $file_name;
    }

    public function registrar()
    {
        $tabla_metodospago = new \App\Models\Tabla_metodospago;
        $tabla_usuario_metodoPago = new \App\Models\Tabla_usuario_metodoPago();

        $metodosPago = array();
        $metodosPago['nombre_metodoPago'] = $this->request->getPost("nombre_metodopago");
        $metodosPago['clave_metodoPago'] = $this->request->getPost("clave_metodopago");

        $clave = $this->request->getPost("clave_metodopago");
        $metodosPago['dia_metodoPago'] = $this->request->getPost("dia_metodopago");
        $metodosPago['year_metodoPago'] = $this->request->getPost("year_metodopago");
        $metodosPago['cve_metodoPago'] = $this->request->getPost("cve_metodopago");

        $encontro = $tabla_metodospago->existe_metodopago($metodosPago['clave_metodoPago']);

        if ($encontro != FALSE) {
            mensaje("El metodo de pago " . $metodosPago['nombre_metodoPago'] . " ya existe, por favor ingrese un metodo de pago", ALERT_WARNING, "!Error al registrar!");
            return $this->index();
        } else {
            if ($tabla_metodospago->insert($metodosPago) > 0) {

                $usuario_metodopago = array();
                $session = session();

                if ($session->rol_actual == ROL_USUARIO["clave"]) {
                    $id_metodopago = $tabla_metodospago->id_metodopago_buscar($clave);
                    $usuario_metodopago['id_metodoPago'] = $id_metodopago['id_metodoPago'];
                    $usuario_metodopago['id_usuario'] = $session->id_usuario;

                    if ($tabla_usuario_metodoPago->insert($usuario_metodopago) > 0) {
                        mensaje("El metodo de pago ha sido registrado exitosamente.", ALERT_SUCCESS, "¡Registro exitoso!");
                        return redirect()->to(route_to('metodos_pago'));
                    } else {
                        mensaje("Hubo un error al registrar el metodo de pago. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
                    }
                }
            } else {
                mensaje("Hubo un error al registrar el metodo de pago. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
            }
        }
    }

    public function eliminar($id_metodoPago = 0)
    {
        $tabla_metodospago = new \App\Models\Tabla_metodospago;

        if ($tabla_metodospago->existe_metodopago_id($id_metodoPago)) {
            if ($tabla_metodospago->delete($id_metodoPago) > 0) {
                mensaje("El metodo de pago ha sido eliminado exitosamente.", ALERT_SUCCESS, "¡Metodo de pago eliminado!");
            } else {
                mensaje("Hubo un error al eliminar este metodo de pago. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al eliminar el metodo de pago!");
                return $this->index($id_metodoPago);
            }
        } else {
            mensaje("El metodo de pago no existe.", ALERT_DANGER, "¡Error al eliminar el metodo de pago!");
        }

        return redirect()->to(route_to('metodos_pago'));
    }
}
