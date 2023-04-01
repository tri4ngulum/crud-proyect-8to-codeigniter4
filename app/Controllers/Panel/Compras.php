<?php


namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use Config\Session;

class Compras extends BaseController
{
    private $session;
    private $permitido = TRUE;

    public function __construct()
    {
        helper('permisos_helper');
        $this->session = session();

        if (comprobar_acceso(TAREA_COMPRA)) {
            $this->session->tarea_actual = TAREA_COMPRA;
        } else {
            $this->permitido = FALSE;
            $this->session->modulo_permitido = FALSE;
        }
    }


    private function crear_vista($nombre_vista = '', $datos = array())
    {
        $activeTab = 'compras';
        $datos['menu'] = crear_menu_panel($activeTab);

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
        $session->tarea_actual = TAREA_COMPRA;

        $datos['nombre_pagina'] = 'Dashboard';
        $datos['nombre_usuario'] = $this->session->nombre_completo;
        $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO . '/' . $this->session->imagen_usuario);
        $datos['nombre_pagina'] = 'Compras';
        $datos['tarea'] = 'Compras';

        switch ($case) {
            case 0:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Compras',
                        'href' => '#'
                    )
                );
                break;
            case 1:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Compras',
                        'href' => route_to('Compras')
                    ),
                    array(
                        'tarea' => 'Detalles Compras',
                        'href' => '#'
                    ),
                );
                break;
            case 2:
                $breadcrumb = array(
                    array(
                        'tarea' => 'Compras',
                        'href' => route_to('Compras')
                    ),
                    array(
                        'tarea' => 'Compra nuevo',
                        'href' => '#'
                    ),
                );
                break;
        }

        if ($case == 2) {

            $tabla_boletos = new \App\Models\Tabla_boletos();
            $id_boletos =  $tabla_boletos->nombre_boletos();

            $tabla_usuarios = new \App\Models\Tabla_usuarios();
            $id_usuarios =  $tabla_usuarios->nombre_usuarios();

            $tabla_metodopago = new \App\Models\Tabla_metodospago();
            $id_metodopago =  $tabla_metodopago->nombre_metodospagos();

            $datos_usuarios = array();
            foreach ($id_usuarios as $id_nombre) {
                $datos_usuarios[$id_nombre['id_usuario']] = '' . $id_nombre['id_usuario'] . ' - ' . $id_nombre['nombre_usuario'] . '';
            }

            $datos_boletos = array();
            foreach ($id_boletos as $id_nombre) {
                $datos_boletos[$id_nombre['id_boleto']] = '' . $id_nombre['id_boleto'] . ' - ' . $id_nombre['nombre_boleto'] . '';
            }



            if ($session->rol_actual == ROL_USUARIO["clave"]) {
                $tabla_usuario_metodoPago = new \App\Models\Tabla_usuario_metodoPago();

                $ids = $tabla_usuario_metodoPago->data_id($session->id_usuario);

                $data_tabla = array();

                foreach ($ids as $id) {

                    $id_metodopago =  $tabla_metodopago->data_table_metodopago_id($id['id_metodoPago']);
                    $data_tabla[$id['id_metodoPago']] =
                        '' . $id_metodopago['id_metodoPago'] . ' - ' . $id_metodopago['nombre_metodoPago'] . '';
                }

                $datos['id_metodopagos'] = $data_tabla;
            } else {
                $datos_metodopago = array();
                foreach ($id_metodopago as $id_nombre) {
                    $datos_metodopago[$id_nombre['id_metodoPago']] = '' . $id_nombre['id_metodoPago'] . ' - ' . $id_nombre['nombre_metodoPago'] . '';
                }
                $datos['id_metodopagos'] = $datos_metodopago;
            }

            $datos['id_boletos'] = $datos_boletos;
            $datos['id_usuarios'] = $datos_usuarios;
        }
        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);
        $tabla_compras = new \App\Models\Tabla_compras();

        if ($session->rol_actual == ROL_USUARIO["clave"]) {
            $datos['ventas'] = $tabla_compras->data_table_ventas_id_usuario($session->id_usuario);
        } else {
            $datos['ventas'] = $tabla_compras->data_table_ventas();
        }
        return $datos;
    }

    public function detCompras()
    {
        return $this->crear_vista('panel/pages/compras_detalles', $this->cargar_datos(1));
    }

    public function addCompras()
    {
        return $this->crear_vista('panel/pages/compras_nuevo', $this->cargar_datos(2));
    }


    public function index()
    {
        if ($this->permitido) {
            return $this->crear_vista('panel/pages/compras', $this->cargar_datos(0));
        } else {
            return redirect()->to(route_to('login'));
        }
    }

    public function registrar()
    {
        $session = session();

        $tabla_compras = new \App\Models\Tabla_compras();
        $tabla_boletos = new \App\Models\Tabla_boletos();

        $venta = array();
        $venta['id_usuario'] = $this->request->getPost("id_usuario");
        $venta['id_boleto'] = $this->request->getPost("id_boleto");
        $venta['cantidad'] = $this->request->getPost("cantidad");
        $venta['id_metodoPago'] = $this->request->getPost("id_metodoPago");
        $venta['fecha_venta'] = $this->request->getPost("fecha_venta");


        if ($session->rol_actual == ROL_USUARIO["clave"]) {
            $res = $tabla_boletos->precio_boleto($venta['id_boleto']);
            $venta['precio_boleto'] = $res['precio_boleto'];
        } else {
            $venta['precio_boleto'] = $this->request->getPost("precio_boleto");
        }

        if ($venta['precio_boleto'] == NULL) {
            $precio_boleto = $tabla_boletos->precio_boleto($venta['id_boleto']);
            $venta['precio_boleto'] = $precio_boleto['precio_boleto'];
        }
        $venta['total_venta'] = (int)$venta['precio_boleto'] * (int)$venta['cantidad'];

        if ($tabla_compras->insert($venta) > 0) {
            mensaje("La venta ha sido registrado exitosamente.", ALERT_SUCCESS, "¡Registro exitoso!");
            return redirect()->to(route_to('compras'));
        } else {
            mensaje("Hubo un error al registrar la venta. Intente nuevamente, por favor.", ALERT_DANGER, "¡Error al registrar!");
        }
    }

    public function eliminar($id_venta = 0)
    {
        $tabla_compras = new \App\Models\Tabla_compras();

        if ($tabla_compras->existe_venta_id($id_venta)) {
            if ($tabla_compras->delete($id_venta) > 0) {
                mensaje("La venta ha sido eliminado exitosamente.", ALERT_SUCCESS, "¡Venta eliminado!");
            } else {
                mensaje("Hubo un error al eliminar esta venta. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al eliminar venta!");
                return $this->index($id_venta);
            }
        } else {
            mensaje("Venta no existe.", ALERT_DANGER, "¡Error al eliminar venta!");
        }

        return redirect()->to(route_to('compras'));
    }


    public function estatus($id_boleto = 0, $estatus = 0)
    {
        $tabla_boletos = new \App\Models\Tabla_boletos();

        if ($tabla_boletos->existe_boleto_id($id_boleto)) {
            if ($estatus == 1 or $estatus == 2) {
                if ($tabla_boletos->update($id_boleto, ['estatus_boleto' => $estatus]) > 0) {
                    mensaje("El estatus del boleto ha sido actualizado exitosamente.", ALERT_SUCCESS, "¡Estatus actualizado!");
                } else {
                    mensaje("Hubo un error al acutalizar el estatus de este boleto. Intente nuevamente, por favor", ALERT_DANGER, "¡Error al actualizar el estatus!");
                    return $this->index($id_boleto);
                }
            } else {

                mensaje("Valor del estatus no valido", ALERT_WARNING, "¡Error al actualizar el estatus!");
            }
        } else {

            mensaje("Boleto no existe", ALERT_DANGER, "¡Error al actualizar el estatus!");
        }
        return $this->index($id_boleto);
        return redirect()->to(route_to('boletos'));
    }
}
