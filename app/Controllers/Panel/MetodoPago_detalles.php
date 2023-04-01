<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class MetodoPago_detalles extends BaseController
{

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

    private function cargar_datos($info_metodopago = array())
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_METODOPAGO_DETALLES;

        $datos['nombre_usuario'] = $session->get('usuario_completo');
        $datos['foto_usuario'] = base_url(RECURSOS_IMAGENES_USUARIO . '/' . $session->imagen_usuario);
        $datos['nombre_pagina'] = 'Metodo de pago detalles';
        $datos['tarea'] = 'Metodo de pago detalles';
        $breadcrumb = array(
            array(
                'tarea' => 'Metodo de pago',
                'href' => route_to('metodos_pago')
            ),
            array(
                'tarea' => 'Detalles Metodos de pago',
                'href' => '#'
            ),
        );

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $datos['metodopago'] = $info_metodopago;

        return $datos;
    }


    public function index($id_metodopago = 0)
    {
        $tabla_metodospago = new \App\Models\Tabla_metodospago();
        $metodopago = $tabla_metodospago->obtener_metodopago($id_metodopago);

        if (is_null($metodopago)) {
            mensaje('No se encuentra el metodo de pago proporcionado.', ALERT_WARNING, '¡Metodo de pago no encontrado');
            return redirect()->to(route_to('metodos_pago'));
        } else {
            return $this->crear_vista('panel/pages/metodo_pago_detalles', $this->cargar_datos($metodopago));
        }
    }



    public function editar()
    {
        $tabla_metodospago = new \App\Models\Tabla_metodospago();

        $id_metodoPago = $this->request->getPost("id_metodopago");

        $metodosPago = array();
        $metodosPago['nombre_metodoPago'] = $this->request->getPost("nombre_metodopago");
        $metodosPago['clave_metodoPago'] = $this->request->getPost("clave_metodopago");
        $metodosPago['dia_metodoPago'] = $this->request->getPost("dia_metodopago");
        $metodosPago['year_metodoPago'] = $this->request->getPost("year_metodopago");
        $metodosPago['cve_metodoPago'] = $this->request->getPost("cve_metodopago");

        $encontro = $tabla_metodospago->existe_metodopago($metodosPago['clave_metodoPago']);


        if ($tabla_metodospago->update($id_metodoPago, $metodosPago) > 0) {
            mensaje('El metodo de pago ha sido actualizado exitosamente.', ALERT_SUCCESS, "¡Actualización exitosa!");
            return redirect()->to(route_to('metodos_pago'));
        } else {
            mensaje("Hubo un error al actualizar el metodo de pago. Intente nuevamente, por favor.", ALERT_INFO, "¡Error al actualizar!");
            return $this->index($id_metodoPago);
        }
    }
}
