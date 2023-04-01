<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Usuario_detalles extends BaseController
{
    private $session;
    private $permitido = TRUE;

    //Constructor
    public function __construct()
    {
        //Se intancia el Acceso helper
        helper('permisos_helper');
        //instancia de la sesion
        $this->session = session();

        //Verifica si el usuario logeado cuenta con los permiso de esta area
        if (comprobar_acceso(TAREA_USUARIO_DETALLES)) {
            $this->session->tarea_actual = TAREA_USUARIO_DETALLES;
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

    private function cargar_datos($info_usuario = array())
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_USUARIO_DETALLES;

        $datos['nombre_usuario'] = $session->get('usuario_completo');
        $datos['foto_usuario'] = base_url(RECURSOS_IMAGENES_USUARIO . '/' . $session->imagen_usuario);
        $datos['nombre_pagina'] = 'Usuario detalles';
        $datos['tarea'] = 'Usuario detalles';
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

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $datos['usuario'] = $info_usuario;

        return $datos;
    }


    public function index($id_usuario = 0)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        $usuario = $tabla_usuarios->obtener_usuario($id_usuario);

        if (is_null($usuario)) {
            mensaje('No se encuentra al usuario proporcionado.', ALERT_WARNING, '¡Usuarion no encontrado');
            return redirect()->to(route_to('usuarios'));
        } else {
            return $this->crear_vista('panel/pages/usuario_detalles', $this->cargar_datos($usuario));
        }
    }

    private function eliminar_archivo_file($path = NULL, $file = NULL)
    {
        if (!empty($file)) {
            if (file_exists($path . $file)) {
                unlink($path . $file);
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    private function subir_archivo($path = NULL, $file = NULL)
    {
        $file_name = $file->getRandomName();
        $file->move($path, $file_name);
        return $file_name;
    }


    public function editar()
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        $id_usuario = $this->request->getPost("id_usuario");

        $usuario = array();
        $usuario['nombre_usuario'] = $this->request->getPost("nombre");
        $usuario['ap_paterno_usuario'] = $this->request->getPost("apellido_paterno");
        $usuario['ap_materno_usuario'] = $this->request->getPost("apellido_materno");
        $usuario['sexo_usuario'] = $this->request->getPost("sexo");
        $usuario['email_usuario'] = $this->request->getPost("email");
        $usuario['id_rol'] = $this->request->getPost("rol");

        if (!is_null($this->request->getPost('reppassword'))) {
            $usuario['password_usuario'] = hash('sha256', $this->request->getPost('reppassword'));
        }
        if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
            $path_imagen = $tabla_usuarios->imagen_usuario($id_usuario);
            $data = $this->eliminar_archivo_file(RECURSOS_IMAGENES_USUARIO.'/', $path_imagen['imagen_usuario']);
            $usuario['imagen_usuario'] = $this->subir_archivo(RECURSOS_IMAGENES_USUARIO, $this->request->getFile('foto_perfil'));
        }

        if ($tabla_usuarios->update($id_usuario, $usuario) > 0) {
            mensaje('El usuario ha sido actualizado exitosamente.', ALERT_SUCCESS, "¡Actualización exitosa!");
            return redirect()->to(route_to('usuarios'));
        } else {
            mensaje("hubo un error al actualizar al usuario. Intente nuevamente, por favor.", ALERT_INFO, "¡Error al actualizar!");
            return $this->index($id_usuario);
        }
    }

 

}
