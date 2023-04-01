<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Boleto_detalles extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_BOLETO_DETALLES)) {
            $this->session->tarea_actual = TAREA_BOLETO_DETALLES;
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

    private function cargar_datos($info_boleto = array())
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_BOLETO_DETALLES;

        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Boletos';
        $datos['tarea'] = 'Boletos';


        $breadcrumb = array(
            array(
                'tarea' => 'Boletos',
                'href' => route_to('boletos')
            ),
            array(
                'tarea' => 'Detalles Boleto',
                'href' => '#'
            ),
        );

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $datos['boleto'] = $info_boleto;

        return $datos;
    }


    public function index($id_boleto = 0)
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();
        $boleto = $tabla_boletos->obtener_boleto($id_boleto);

        if (is_null($boleto)) {
            mensaje('No se encuentra el boleto proporcionado.', ALERT_WARNING, '¡Boleto no encontrado');
            return redirect()->to(route_to('boletos'));
        } else {
            return $this->crear_vista('panel/pages/boleto_detalles', $this->cargar_datos($boleto));
        }
    }

    public function editar()
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();


        $id_boleto = $this->request->getPost("id_boleto");

        $boleto = array();
        $boleto['nombre_boleto'] = $this->request->getPost("nombre_boleto");
        $boleto['precio_boleto'] = $this->request->getPost("precio_boleto");
        $boleto['fecha'] = $this->request->getPost("fecha");


        if ($tabla_boletos->update($id_boleto, $boleto) > 0) {
            mensaje('El boleto ha sido actualizado exitosamente.', ALERT_SUCCESS, "¡Actualización exitosa!");
            return redirect()->to(route_to('boletos'));
        } else {
            mensaje("hubo un error al actualizar el boleto. Intente nuevamente, por favor.", ALERT_INFO, "¡Error al actualizar!");
            return $this->index($id_boleto);
        }
    }
}
