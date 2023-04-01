<?php


namespace App\Controllers\Panel;

use App\Controllers\BaseController;


class Usuarios extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_USUARIOS)) {
            $this->session->tarea_actual = TAREA_USUARIOS;
        } else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        }
    }

    private function crear_vista($nombre_vista = '', $datos = array())
    {
        $activeTab = 'usuarios';
        $datos['menu'] = crear_menu_panel();

        return view($nombre_vista, $datos);
    }

    private function cargar_datos($case)
    {
        $datos = array();

        $session = session();
        $session->tarea_actual = TAREA_USUARIOS;

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

    public function index()
    {
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/usuarios', $this->cargar_datos(0));
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

    private function eliminar_archivo_file($path = NULL, $file = NULL)
    {
        if (!empty($file)) {
            if (file_exists($path . $file)) {
                unlink($path . $file);
                return TRUE;
            } //end if
        } //end if is_null
        else {
            return FALSE;
        } //end else is_null
    } //end eliminar_archivo


    public function registrar()
    {
        $tabla_usuario = new \App\Models\Tabla_usuarios;

        $usuario = array();
        $usuario['estatus_usuario'] = ESTATUS_HABILITADO;
        $usuario['nombre_usuario'] = $this->request->getPost("nombre");
        $usuario['ap_paterno_usuario'] = $this->request->getPost("apellido_paterno");
        $usuario['ap_materno_usuario'] = $this->request->getPost("apellido_materno");
        $usuario['sexo_usuario'] = $this->request->getPost("sexo");
        $usuario['email_usuario'] = $this->request->getPost("email");
        $usuario['password_usuario'] = hash('sha256', $this->request->getPost("reppassword"));
        $usuario['id_rol'] = $this->request->getPost("rol");

        if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
            $usuario['imagen_usuario'] = $this->subir_archivo(RECURSOS_IMAGENES_USUARIO, $this->request->getFile('foto_perfil'));
        }

        $encontro = $tabla_usuario->existe_usuario($usuario['email_usuario']);

        if ($encontro != FALSE) {
            mensaje("El correo " . $usuario['email_usuario'] . " ya existe, por favor ingrese un nuevo correo", ALERT_WARNING, "!Error al registrar!");
            return $this->index();
        } else {
            if ($tabla_usuario->insert($usuario) > 0) {
                mensaje("El usuario ha sido registrado exitosamente.", ALERT_SUCCESS, "¡Registro exitoso!");
                return redirect()->to(route_to('usuarios'));
            } else {
                mensaje("Hubo un error al registrar al usuario. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
            }
        }
    }

    public function eliminar($id_usuario = 0)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        if ($tabla_usuarios->existe_usuario_id($id_usuario)) {


            $path_imagen = $tabla_usuarios->imagen_usuario($id_usuario);
            //Eliminamos la imagen de la foto_perfil
            if (!empty($path_imagen)) {
                $this->eliminar_archivo_file(RECURSOS_IMAGENES_USUARIO . '/', $path_imagen['imagen_usuario']);
            } 



            if ($tabla_usuarios->delete($id_usuario) > 0) {
                mensaje("El usuario ha sido eliminado exitosamente.", ALERT_SUCCESS, "¡Usuario eliminado!");
            } else {
                mensaje("Hubo un error al eliminar este usuarrio. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al eliminar al usuario!");
                return $this->index($id_usuario);
            }
        } else {
            mensaje("Usuario no existe.", ALERT_DANGER, "¡Error al eliminar al usuario!");
        }

        return redirect()->to(route_to('usuarios'));
    }


    public function estatus($id_usuario = 0, $estatus = 0)
    {
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        if ($tabla_usuarios->existe_usuario_id($id_usuario)) {
            if ($estatus == 1 or $estatus == 2) {
                if ($tabla_usuarios->update($id_usuario, ['estatus_usuario' => $estatus]) > 0) {
                    mensaje("El estatus del usuario ha sido actualizado exitosamente.", ALERT_SUCCESS, "¡Estatus actualizado!");
                } else {
                    mensaje("Hubo un error al acutalizar el estatus de este usuario. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar el estatus!");
                    return $this->index($id_usuario);
                }
            } else {

                mensaje("Valor del estatus no valido", ALERT_WARNING, "¡Error al actualizar el estatus!");
            }
        } else {

            mensaje("Usuario no existe", ALERT_DANGER, "¡Error al actualizar el estatus!");
        }
        return $this->index($id_usuario);
        return redirect()->to(route_to('usuarios'));
    }
}
