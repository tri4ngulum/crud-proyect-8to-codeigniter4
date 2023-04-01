<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $returntype = 'object';
    protected $allowedFields = [
        'estatus_usuario',
        'nombre_usuario',
        'ap_paterno_usuario',
        'ap_materno_usuario',
        'sexo_usuario',
        'email_usuario',
        'password_usuario',
        'imagen_usuario',
        'id_rol'
    ];

    public function validar_usuario($email = null, $password = null)
    {
        return $this->select('
        usuarios.id_usuario, 
        usuarios.nombre_usuario,
        usuarios.ap_paterno_usuario,
        usuarios.ap_materno_usuario,
        usuarios.email_usuario,
        usuarios.imagen_usuario,
        usuarios.sexo_usuario,
        usuarios.estatus_usuario,
        usuarios.id_rol, roles.rol')
            ->join('roles', 'usuarios.id_rol = roles.id_rol')
            ->where('usuarios.email_usuario', $email)
            ->where('usuarios.password_usuario', $password)
            ->first();
    }

    public function data_table_usuarios($id_usuario_sesion = 0, $rol = 0)
    {
        $result = $this->select('
        usuarios.id_usuario, usuarios.estatus_usuario, usuarios.nombre_usuario,usuarios.ap_paterno_usuario,usuarios.ap_materno_usuario, usuarios.sexo_usuario, usuarios.imagen_usuario, usuarios.email_usuario, roles.rol')
            ->join('roles', 'roles.id_rol = usuarios.id_rol')->where('usuarios.id_usuario !=', $id_usuario_sesion)->where('roles.id_rol !=', $rol)->orderBy('ap_paterno_usuario', 'ASC')->findAll();

        return $result;
    }

    public function existe_usuario_id($id_usuario = 0)
    {
        $resultado = $this->select('id_usuario')->where('id_usuario', $id_usuario)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function existe_usuario($email = null)
    {
        $resultado = $this->select('email_usuario')->where('email_usuario', $email)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function data_table_usuarios_2($id_usuario_sesion = 0, $rol = 0)
    {
        $resultado = $this
            ->select('id_usuario, estatus_usuario, nombre_usuario, ap_paterno_usuario, ap_materno_usuario, sexo_usuario, imagen_usuario, email_usuario, roles.rol')
            ->join('roles', 'roles.id_rol = usuarios.id_rol')
            ->where('usuarios.id_usuario !=', $id_usuario_sesion)
            ->orderBy('ap_paterno_usuario', 'ASC')
            ->findAll();

        return $resultado;
    }

    public function obtener_usuario($id_usuario = 0)
    {
        $resultado = $this
            ->select('id_usuario, nombre_usuario, ap_paterno_usuario, ap_materno_usuario,
        sexo_usuario, email_usuario, imagen_usuario, id_rol')
            ->where('id_usuario', $id_usuario)
            ->first();

        return $resultado;
    }

    public function nombre_usuario($id_usuario = 0)
    {
        $resultado = $this->select('
        nombre_usuario')
        ->where('id_usuario',$id_usuario)
        ->first();

        return $resultado;
    }

    public function imagen_usuario($id_usuario = 0){

        $resultado = $this->select('
        imagen_usuario')
        ->where('id_usuario',$id_usuario)
        ->first();

        return $resultado;
    }
    public function nombre_usuarios(){
        $resultado = $this->select('
        id_usuario,
        nombre_usuario')
        ->findAll();

        return $resultado;
    }
 
    public function contar_usurios(){
        return $result = $this->select('id_usurio')->countAllResults();
    }
}
