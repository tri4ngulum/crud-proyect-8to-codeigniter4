<?php

namespace App\Models;

use CodeIgniter\Model;

class Tabla_compras extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';
    protected $returntype = 'object';
    protected $allowedFields = [
        'id_venta',
        'id_usuario',
        'id_boleto',
        'precio_boleto',
        'cantidad',
        'total_venta',
        'fecha_venta',
        'id_metodoPago'
    ];

    public function validar_boleto($id_venta = 0)
    {
        return $this->select('
        id_venta, 
        id_usuario,
        id_boleto,
        precio_boleto,
        cantidad,
        total_venta,
        fecha_venta,
        id_metodoPago')
            ->where('ventas.id_venta', $id_venta)
            ->first();
    }

    public function data_table_ventas()
    {
        $result = $this->select('
        ventas.id_venta, 
        ventas.id_usuario,
        ventas.id_boleto,
        ventas.precio_boleto,
        ventas.cantidad,
        ventas.total_venta,
        ventas.fecha_venta,
        ventas.id_metodoPago,
        boletos.nombre_boleto,
        usuarios.nombre_usuario,
        metodosPago.nombre_metodoPago')
            ->join('usuarios', 'ventas.id_usuario = usuarios.id_usuario')
            ->join('boletos', 'ventas.id_boleto = boletos.id_boleto')
            ->join('metodosPago', 'ventas.id_metodoPago = metodosPago.id_metodoPago')
            ->orderBy('nombre_usuario', 'ASC')->findAll();

        return $result;
    }


    public function data_table_ventas_id_usuario($id_usuario = 0)
    {
        $result = $this->select('
        ventas.id_venta, 
        ventas.id_usuario,
        ventas.id_boleto,
        ventas.precio_boleto,
        ventas.cantidad,
        ventas.total_venta,
        ventas.fecha_venta,
        ventas.id_metodoPago,
        boletos.nombre_boleto,
        usuarios.nombre_usuario,
        metodosPago.nombre_metodoPago')
            ->join('usuarios', 'ventas.id_usuario = usuarios.id_usuario')
            ->join('boletos', 'ventas.id_boleto = boletos.id_boleto')
            ->join('metodosPago', 'ventas.id_metodoPago = metodosPago.id_metodoPago')
            ->where('ventas.id_usuario',$id_usuario)
            ->orderBy('nombre_usuario', 'ASC')->findAll();

        return $result;
    }



    public function existe_venta_id($id_venta = 0)
    {
        $resultado = $this->select('id_venta')->where('id_venta', $id_venta)->first();
        $opcion = FALSE;

        if ($resultado != NULL) {
            $opcion = TRUE;
        }

        return $opcion;
    }


    public function obtener_venta($id_venta = 0)
    {
        $resultado = $this->select('
        id_venta, 
        id_usuario,
        id_boleto,
        precio_boleto,
        cantidad,
        total_venta,
        fecha_venta,
        id_metodoPago')
            ->where('id_venta', $id_venta)
            ->first();

        return $resultado;
    }

     public function contar_compras(){
        return $result = $this->select('id_compras')->countAllResults();
    }
}
