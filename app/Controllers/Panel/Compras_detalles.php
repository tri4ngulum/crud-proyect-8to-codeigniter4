<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Compras_detalles extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_COMPRA)) {
            $this->session->tarea_actual = TAREA_COMPRA;
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

    private function cargar_datos($info_venta = array())
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_COMPRA;

        $datos['nombre_pagina'] = 'Dashboard';
        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Comras';
        $datos['tarea'] = 'Compras';


        $breadcrumb = array(
            array(
                'tarea' => 'Compras',
                'href' => route_to('boletos')
            ),
            array(
                'tarea' => 'Detalles Compras',
                'href' => '#'
            ),
        );

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $datos['venta'] = $info_venta;

        $tabla_boletos = new \App\Models\Tabla_boletos();
        $id_boletos =  $tabla_boletos->nombre_boletos();

        $tabla_usuarios = new \App\Models\Tabla_usuarios();
        $id_usuarios =  $tabla_usuarios->nombre_usuarios();

        $tabla_metodopago = new \App\Models\Tabla_metodospago();
        $id_metodopago =  $tabla_metodopago->nombre_metodospagos();

        $datos_usuarios = array();
        foreach ($id_usuarios as $id_nombre) {
            $datos_usuarios[$id_nombre['id_usuario']] = '' . $id_nombre['id_usuario'] . ' - ' . $id_nombre['nombre_usuario'] . '';
        }
        $usuario_actual_seleccion = $datos['venta']['id_usuario'];

        $datos_boletos = array();
        foreach ($id_boletos as $id_nombre) {
            $datos_boletos[$id_nombre['id_boleto']] = '' . $id_nombre['id_boleto'] . ' - ' . $id_nombre['nombre_boleto'] . '';
        }

        $boleto_actual_seleccion = $datos['venta']['id_boleto'];

        $datos_metodopago = array();
        foreach ($id_metodopago as $id_nombre) {
            $datos_metodopago[$id_nombre['id_metodoPago']] = '' . $id_nombre['id_metodoPago'] . ' - ' . $id_nombre['nombre_metodoPago'] . '';
        }

        $metodopago_actual_seleccion = $datos['venta']['id_metodoPago'];

        $datos['usuario_actual'] = $usuario_actual_seleccion;
        $datos['boleto_actual'] = $boleto_actual_seleccion;
        $datos['metodopago_actual'] = $metodopago_actual_seleccion;
        $datos['id_boletos'] = $datos_boletos;
        $datos['id_metodopagos'] = $datos_metodopago;
        $datos['id_usuarios'] = $datos_usuarios;
        return $datos;
    }


    public function index($id_metodopago = 0)
    {
        $tabla_compras = new \App\Models\Tabla_compras();
        $venta = $tabla_compras->obtener_venta($id_metodopago);

        if (is_null($venta)) {
            mensaje('No se encuentra la venta proporcionado.', ALERT_WARNING, '¡Venta no encontrado');
            return redirect()->to(route_to('compras'));
        } else {
            return $this->crear_vista('panel/pages/compras_detalles', $this->cargar_datos($venta));
        }
    }

    public function editar()
    {
        $tabla_compras = new \App\Models\Tabla_compras();

        $id_venta = $this->request->getPost("id_venta");

        $venta = array();
        $venta['id_usuario'] = $this->request->getPost("id_usuario");
        $venta['id_boleto'] = $this->request->getPost("id_boleto");
        $venta['precio_boleto'] = $this->request->getPost("precio_boleto");
        $venta['cantidad'] = $this->request->getPost("cantidad");
        $venta['id_metodoPago'] = $this->request->getPost("id_metodoPago");
        $venta['fecha_venta'] = $this->request->getPost("fecha_venta");

        $venta['total_venta'] = $venta['precio_boleto'] * $venta['cantidad'];

        if ($tabla_compras->update($id_venta, $venta) > 0) {
            mensaje('La venta ha sido actualizado exitosamente.', ALERT_SUCCESS, "¡Actualización exitosa!");
            return redirect()->to(route_to('compras'));
        } else {
            mensaje("Hubo un error al actualizar la venta. Intente nuevamente, por favor.", ALERT_INFO, "¡Error al actualizar!");
            return $this->index($id_venta);
        }
    }
}
