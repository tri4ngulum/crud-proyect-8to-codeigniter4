<?php


namespace App\Controllers\Panel;

use App\Controllers\BaseController;


class Usuarios_nuevo extends BaseController
{

    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_USUARIO_NUEVO)) {
            $this->session->tarea_actual = TAREA_USUARIO_NUEVO;
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

        $session->tarea_actual = TAREA_USUARIO_NUEVO;

        $datos['nombre_pagina'] = 'Dashboard';
        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Dashboard';
        $datos['tarea'] = 'Dashboard';

        switch ($case) {
            case 0:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Usuario',
                        'href' => '#'
                    )
                );
                break;
            case 1:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Usuario',
                        'href' => route_to('usuario')
                    ),
                    array(
                        'tarea' => 'Nuevo Usuario',
                        'href' => '#'
                    ),
                );
                break;
            case 2:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Usuario',
                        'href' => route_to('usuario')
                    ),
                    array(
                        'tarea' => 'Detalles Usuario',
                        'href' => '#'
                    ),
                );
                break;
        }

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $tabla_usuario = new \App\Models\Tabla_usuarios;
        $datos['usuarios'] = $tabla_usuario->data_table_usuarios($session->id_usuario, ROL_ADMINISTRADOR['clave']);

        return $datos;
    }


    public function addUsuario()
    {
        return $this->crear_vista('panel/pages/usuario_nuevo', $this->cargar_datos(1));
    }
}
