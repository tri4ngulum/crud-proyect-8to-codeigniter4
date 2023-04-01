<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_DASHBOARD)) {
            $this->session->tarea_actual = TAREA_DASHBOARD;
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

    private function cargar_datos()
    {

        // ------VARIABLES DE SESSION --------
        $datos = array();
        $datos['nombre_pagina'] = 'Dashboard';
        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Dashboard';
        $datos['tarea'] = 'Dashboard';

        $breadcrumb = array(
            array(
                'tarea' => 'Dashborad',
                'href' => route_to('dashboard')
            ),
            array(
                'tarea' => 'Nuevo',
                'href' => '#'
            )
        );



        $tabla_usuario = new \App\Models\Tabla_usuarios;
        $tabla_metodopago = new \App\Models\Tabla_metodospago();
        $tabla_boletos = new \App\Models\Tabla_boletos();
        $tabla_compras = new \App\Models\Tabla_compras();

        $datos['contadores']['boletos'] = $tabla_boletos->contar_boletos();
        $datos['contadores']['metodopagos'] = $tabla_metodopago->contar_metodopagos();
        $datos['contadores']['usuarios'] = $tabla_usuario->contar_usurios();
        $datos['contadores']['compras'] = $tabla_compras->contar_compras();

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        return $datos;
    }

    public function index()
    {
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/dashboard', $this->cargar_datos());
        } else {
            return redirect()->to(route_to('login'));
        }
    }
}
