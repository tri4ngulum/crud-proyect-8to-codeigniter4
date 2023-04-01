<?php
    namespace App\Controllers\Errores;
    use App\Controllers\BaseController;

    class Error_401 extends BaseController{

        //Constructor

        //Generar y mandar a llamar la vista especifica
        private function crear_vista($nombre_vista = '', $datos = array()) {
            $activeTab = 'dashboard'; 
            $datos['menu'] = crear_menu_panel($activeTab);
            return view($nombre_vista, $datos);
        }//end crear_vista
        
        private function cargar_datos(){
            $datos = array();
            // =====================================
            // Datos fundamentales para la plantilla
            // =====================================
            $session = session();
            $session->tarea_actual = '';

            // ------VARIABLES DE SESSION --------
            $datos['nombre_usuario'] = $session->usuario_completo;
            $datos['foto_usuario'] =  base_url(RECURSOS_IMAGENES_USUARIO.$session->imagen_usuario);
            $datos['nombre_pagina'] = 'Error 401';
            $datos['tarea'] = '';
            //Breadcrum
       
        $breadcrumb = array(
            array(
                'tarea' => 'Dashborad',
                'href' => route_to('dashboard')
            ),
        );


            $datos['breadcrumb'] = breadcrumb($datos['tarea'], $breadcrumb);
            // =====================================
            // Datos prepocesados
            // =====================================
            return $datos;
        }//end cargar_datos

        //Funcion principal
        public function index() {
            return $this->crear_vista('errores/error_401',$this->cargar_datos());            
        }//end index

        /**
         * Funciones externas 
        */

    }//end Dashboard





    