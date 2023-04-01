<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_metodospago extends Model
{
    protected $table = 'metodosPago';
    protected $primaryKey = 'id_metodoPago';
    protected $returntype = 'object';
    protected $allowedFields = [
        'id_metodoPago',
        'nombre_metodoPago',
        'clave_metodoPago',
        'dia_metodoPago',
        'year_metodoPago',
        'cve_metodoPago'
    ];

    public function validar_metodopago($metodopago = null)
    {
        return $this->select('
        id_metodoPago,
        nombre_metodoPago,
        clave_metodoPago,
        dia_metodoPago,
        year_metodoPago,
        cve_metodoPago')
            ->where('clave_metodoPago', $metodopago)
            ->first();
    }

    public function data_table_metodopago()
    {
        $result = $this-> select('
        id_metodoPago,
        nombre_metodoPago,
        clave_metodoPago,
        dia_metodoPago,
        year_metodoPago,
        cve_metodoPago') 
            ->orderBy('nombre_metodoPago', 'ASC')->findAll();

        return $result;
    }

    public function data_table_metodopago_id($id_metodoPago = 0)
    {
        $result = $this-> select('
        id_metodoPago,
        nombre_metodoPago,
        clave_metodoPago,
        dia_metodoPago,
        year_metodoPago,
        cve_metodoPago') 
        ->where('id_metodoPago',$id_metodoPago)->first();
        return $result;
    }




    public function existe_metodopago_id($id_metodoPago= 0)
    {
        $resultado = $this->select('id_metodoPago')->where('id_metodoPago', $id_metodoPago)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function existe_metodopago($clave_metodopago = null)
    {
        $resultado = $this->select('clave_metodoPago')->where('clave_metodoPago', $clave_metodopago)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }

    public function obtener_metodopago($id_metodoPago= 0)
    {
        $resultado = $this
            ->select('
        id_metodoPago,
        nombre_metodoPago,
        clave_metodoPago,
        dia_metodoPago,
        year_metodoPago,
        cve_metodoPago') 
            ->where('id_metodoPago', $id_metodoPago)
            ->first();

        return $resultado;
    }

    public function nombre_metodopago($id_metodoPago= 0){
        $resultado = $this->select('
        nombre_metodoPago')
        ->where('id_metodoPago',$id_metodoPago)
        ->first();
        
        return $resultado;
    }

    public function nombre_metodospagos(){
        $resultado = $this->select('
        id_metodoPago, 
        nombre_metodoPago')
        ->findAll();

        return $resultado;
    }

    public function contar_metodopagos(){
        return $result = $this->select('id_metodoPago')->countAllResults();
    }

    public function id_metodopago_buscar($clave = NULL){
        return $this->select('
        id_metodoPago')
        ->where('clave_metodoPago',$clave)->first();
    }
}

