<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_usuario_metodoPago extends Model{

    protected $table = 'usuario_metodoPago';
    protected $primaryKey = 'id_usuario_metodoPago';
    protected $returntype = 'object';
    protected $allowedFields = [
        'id_usuario_metodoPago', 
        'id_usuario',
        'id_metodoPago'
    ];

    public function data_id($id_usuario = 0){
        return $this->select('
        id_usuario_metodoPago,
        id_usuario,
        id_metodoPago')
        ->where('id_usuario',$id_usuario)->findAll();
    }
}