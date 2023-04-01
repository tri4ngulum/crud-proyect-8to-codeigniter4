<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_boletos extends Model
{
    protected $table = 'boletos';
    protected $primaryKey = 'id_boleto';
    protected $returntype = 'object';
    protected $allowedFields = [
        'id_boleto',
        'nombre_boleto',
        'precio_boleto',
        'fecha'
    ];

    public function validar_boleto($boleto = null)
    {
        return $this->select('
        boletos.id_boleto, 
        boletos.nombre_boleto,
        boletos.precio_boleto,
        boletos.fecha')
            ->where('boleto.nombre_boleto', $boleto)
            ->first();
    }

    public function data_table_boletos()
    {
        $result = $this-> select('
        boletos.id_boleto, 
        boletos.nombre_boleto,
        boletos.precio_boleto,
        boletos.fecha')
            ->orderBy('nombre_boleto', 'ASC')->findAll();

        return $result;
    }

    public function existe_boleto_id($id_boleto= 0)
    {
        $resultado = $this->select('id_boleto')->where('id_boleto', $id_boleto)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function existe_boleto($nombre_boleto = null)
    {
        $resultado = $this->select('nombre_boleto')->where('nombre_boleto', $nombre_boleto)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function obtener_boleto($id_boleto= 0)
    {
        $resultado = $this
            ->select('id_boleto, nombre_boleto, precio_boleto, fecha')
            ->where('id_boleto', $id_boleto)
            ->first();

        return $resultado;
    }

    public function nombre_boleto($id_boleto = 0){
        $resultado = $this->select('
        nombre_boleto')
        ->where('id_boleto',$id_boleto)
        ->first();
        
        return $resultado;
    }

    public function nombre_boletos(){
        $resultado = $this->select('
        id_boleto, 
        nombre_boleto')
        ->findAll();

        return $resultado;
    }

    public function precio_boleto($id_boleto = 0){
        $resultado = $this->select('
        precio_boleto')
        ->where('id_boleto',$id_boleto)
        ->first();

        return $resultado;
    }

    public function contar_boletos(){
        return $result = $this->select('id_boleto')->countAllResults();
    }
}
