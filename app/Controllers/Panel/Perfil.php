<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Perfil extends BaseController
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
        if (comprobar_acceso(TAREA_PERFIL)) {
            $this->session->tarea_actual = TAREA_PERFIL;
        } else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        }
    }

    //Generar y mandar a llamar la vista especifica
    private function crear_vista($nombre_vista = '', $datos = array())
    {
        $datos['menu'] = crear_menu_panel();
        
        $session = session();

        if ($session->id_usuario == NULL) {
            return redirect()->to(route_to('/'));
        } else {
            return view($nombre_vista, $datos);
        }
    } //end crear_vista

    private function cargar_datos()
    {
        $datos = array();
        // =====================================
        // Datos fundamentales para la plantilla
        // =====================================
        $session = session();
        // ------VARIABLES DE SESSION --------
        $datos['nombre_usuario'] = $session->usuario_completo;
        $datos["rol"] = ROLES[$session->rol_actual];
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);

        // ------DATOS DE LA PAGINA --------
        $datos['nombre_pagina'] = 'Mi perfil';
        $datos['tarea'] = 'Mi perfil';

        //Breadcrum
        $breadcrumb = array(
            array(
                'tarea' => 'Mi perfil',
                'href' => '#'
            )
        );
        $datos['breadcrumb'] = breadcrumb($datos['tarea'], $breadcrumb);

        // =====================================
        // Datos prepocesados
        // =====================================
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        $usuario = $tabla_usuarios->obtener_usuario($session->id_usuario);

        $datos["informacion"] = $usuario;

        return $datos;
    } //end cargar_datos

    //Funcion principal
    public function index()
    {
        //Se verifica si la bandera es true
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/perfil', $this->cargar_datos());
        } //end else
        else {
            // mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", ALERT_WARNING);
            return redirect()->to(route_to('login'));
        }
    }

    // =====================================
    // Funcion agregar imagen
    // =====================================

    private function subir_archivo($path = NULL, $file = NULL)
    {
        $file_name = $file->getRandomName();
        $file->move($path, $file_name);
        return $file_name;
    } //end subir_archivo

    // =====================================
    // Funcion eliminar imagen
    // =====================================

    private function eliminar_archivo($path = NULL, $file = NULL)
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

    /**
     * Funciones externas 
     */
    public function actualizar_perfil()
    {
        //Instancia del Modelo
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        $session = session();

        //Usuario que se desea editar
        $id_usuario = $this->request->getPost("id_usuario");
        //Se declara el arreglo para almacenar todo los datos
        $usuario = array();
        $usuario['nombre_usuario'] = $this->request->getPost("nombre");
        $usuario['ap_paterno_usuario'] = $this->request->getPost("apellido_paterno");
        $usuario['ap_materno_usuario'] = $this->request->getPost("apellido_materno");
        $usuario['sexo_usuario'] = $this->request->getPost("sexo");
        $usuario['email_usuario'] = $this->request->getPost("email");

        //Verificamos si el usuario desea cambiar la foto_perfil
        if (!empty($this->request->getFile('foto_perfil')) && $this->request->getFile('foto_perfil')->getSize() > 0) {
            $path_imagen = $tabla_usuarios->imagen_usuario($session->id_usuario);
            $this->eliminar_archivo(RECURSOS_IMAGENES_USUARIO.'/', $path_imagen['imagen_usuario']);
            $usuario['imagen_usuario'] = $this->subir_archivo(RECURSOS_IMAGENES_USUARIO, $this->request->getFile('foto_perfil'));
        } //end if existe imagen

        if ($tabla_usuarios->update($session->id_usuario, $usuario) > 0) {
            $session->set("nombre_usuario", $usuario['nombre_usuario']);
            $session->set("usuario_completo", $usuario['nombre_usuario'] . ' ' . $usuario['ap_paterno_usuario'] . ' ' . $usuario['ap_materno_usuario']);
            $session->set("sexo_usuario", $usuario['sexo_usuario']);
            $session->set("email_usuario", $usuario['email_usuario']);

            if (isset($usuario['imagen_usuario'])) {
                $session->set("imagen_usuario", $usuario['imagen_usuario']);
                // dd($session->imagen_usuario);
            } //end if 
            mensaje("La información se ha actualizado de manera correcta.", ALERT_SUCCESS, "¡Actualización exitosa!");
        } //end if se actualiza el usuario
        else {
            mensaje("Hubo un error al actualizar tu información. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar!");
        } //end else se actualiza el usuario
        return $this->index();
    } //end actualizar_mi_perfil

    public function actualizar_password()
    {
        $usuario = array();
        $session = session();

        //Instancia del Modelo
        $tabla_usuarios = new \App\Models\Tabla_usuarios;

        //Verificamos si la contraseña a repetir no está vacia
        if (!is_null($this->request->getPost('confirm_password'))) {
            $usuario['password_usuario'] = hash('sha256', $this->request->getPost('confirm_password'));
        } //end if

        if (empty($usuario)) {
            mensaje("Hubo un error al actualizar la contraseña. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar!");
        } //end if empty
        else {
            if ($tabla_usuarios->update($session->id_usuario, $usuario) > 0) {
                mensaje("La contraseña ha sido actualizada.", ALERT_SUCCESS, "¡Actualización exitosa!");
            } //end if se actualiza el usuario
            else {
                mensaje("Hubo un error al actualizar la contraseña. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar!");
            } //end else se inserta el usuario
        } //end else
        return $this->index();
    } //end actualizar_password
}//end Dashboard
