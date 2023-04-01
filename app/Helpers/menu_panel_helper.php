<?php

function activar_menu_item_panel($menu = NULL, $tarea_actual = NULL)
{
    switch ($tarea_actual) {
        case TAREA_DASHBOARD:
            $menu['dashboard']['is_active'] = TRUE;
            break;
        case TAREA_USUARIOS:
        case TAREA_USUARIO_NUEVO:
        case TAREA_USUARIO_DETALLES:
            $menu['usuarios']['is_active'] = TRUE;
            break;
        case TAREA_BOLETOS:
        case TAREA_BOLETO_NUEVO:
        case TAREA_BOLETO_DETALLES:
            $menu['boletos']['is_active'] = TRUE;
            break;
        case TAREA_COMPRA:
        case TAREA_COMPRA_NUEVO:
        case TAREA_COMPRA_DETALLES:
            $menu['compras']['is_active'] = TRUE;
            break;
        case TAREA_METODOPAGO:
        case TAREA_METODOPAGO_NUEVO:
        case TAREA_METODOPAGO_DETALLES:
            $menu['metodos_pago']['is_active'] = TRUE;
            break;
    }

    return $menu;
}

//function configurar_menu($pagina = '')
function configurar_menu_panel($ro_actual = NULL)
{
    $session = session();

    $menu = array();
    $menu_item = array();
    $sub_menu_item = array();

    //Opción Dashboard
    $menu_item['is_active'] = FALSE;
    $menu_item['href'] = route_to('dashboard');
    $menu_item['icon'] = 'grid-outline';
    $menu_item['text'] = 'Dashboard';
    $menu_item['submenu'] = array();
    $menu['dashboard'] = $menu_item;


    if ($session->rol_actual == ROL_ADMINISTRADOR["clave"]) {
        //Opción Usuarios
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('usuarios');
        $menu_item['icon'] = 'people-outline';
        $menu_item['text'] = 'Usuarios';
        $menu_item['submenu'] = array();
        $menu['usuarios'] = $menu_item;

        //Opción Boletos 
        $menu_item['is_active'] = FALSE;
        $menu_item['icon'] = 'ticket-outline';
        $menu_item['href'] = route_to('boletos');
        $menu_item['text'] = 'Boletos';
        $menu_item['submenu'] = array();
        $menu['boletos'] = $menu_item;


        //Opción Compras 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('compras');
        $menu_item['icon'] = 'cash-outline';
        $menu_item['text'] = 'Compras';
        $menu_item['submenu'] = array();
        $menu['compras'] = $menu_item;


        //Opción Metodos de Pago 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('metodos_pago');
        $menu_item['icon'] = 'card-outline';
        $menu_item['text'] = 'Metodos de pago';
        $menu_item['submenu'] = array();
        $menu['metodos_pago'] = $menu_item;
    }

    if ($session->rol_actual == ROL_OPERADOR["clave"]) {
        //Opción Boletos 
        $menu_item['is_active'] = FALSE;
        $menu_item['icon'] = 'ticket-outline';
        $menu_item['href'] = route_to('boletos');
        $menu_item['text'] = 'Boletos';
        $menu_item['submenu'] = array();
        $menu['boletos'] = $menu_item;


        //Opción Compras 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('compras');
        $menu_item['icon'] = 'cash-outline';
        $menu_item['text'] = 'Compras';
        $menu_item['submenu'] = array();
        $menu['compras'] = $menu_item;


        //Opción Metodos de Pago 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('metodos_pago');
        $menu_item['icon'] = 'card-outline';
        $menu_item['text'] = 'Metodos de pago';
        $menu_item['submenu'] = array();
        $menu['metodos_pago'] = $menu_item;
    }

    if ($session->rol_actual == ROL_USUARIO["clave"]) {
      
        //Opción Compras 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('compras');
        $menu_item['icon'] = 'cash-outline';
        $menu_item['text'] = 'Compras';
        $menu_item['submenu'] = array();
        $menu['compras'] = $menu_item;


        //Opción Metodos de Pago 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('metodos_pago');
        $menu_item['icon'] = 'card-outline';
        $menu_item['text'] = 'Metodos de pago';
        $menu_item['submenu'] = array();
        $menu['metodos_pago'] = $menu_item;
    }


    return $menu;
}

//================================
//Función para crear el menú 
//================================
function crear_menu_panel()
{
    //INSTANCIA DE LA VARIABLE DE SESSION
    $session = session();

    //Opcion para generar el arreglo de tomo mi menú
    $menu = configurar_menu_panel();

    //Opción para activar dicha opcion de cada módulo
    if (isset($session->tarea_actual)) {
        $menu = activar_menu_item_panel($menu, $session->tarea_actual);
    } //end isset

    $html = '<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
    foreach ($menu as $item) {
        if (isset($item['href'])) {
            if ($item['href'] != '#') {
                $html .= '
                        <li class="nav-item">
                            <a href="' . $item['href'] . '"  class="nav-link ' . ($item["is_active"] ? 'active' : '') . '">
                            <ion-icon name="'. $item['icon'] . '"></ion-icon>
                            <p>' . $item['text'] . '</p>
                            </a>
                        </li>';
            } //end if href != # 
            else {
                if (sizeof($item['submenu']) > 0) {
                    $html .= '
                            <li class="nav-item ' . ($item["is_active"] ? 'menu-is-opening menu-open' : '') . '">
                                <a href="' . $item['href'] . '" class="nav-link ' . ($item["is_active"] ? 'active' : '') . '">
                                    <i class="nav-icon ' . $item['icon'] . '"></i>
                                    <p>
                                        ' . $item['text'] . '
                                        <i class="right fa fa-sort-desc"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">';
                    foreach ($item['submenu'] as $item_sub_menu) {
                        // $html.='<li><a href="'.$item_sub_menu["href"].'">'.$item_sub_menu["text"].'</a></li>';
                        $html .= '
                                        <li class="nav-item">
                                            <a href="' . $item_sub_menu["href"] . '"  class="nav-link ' . ($item_sub_menu["is_active"] ? 'active' : '') . '">
                                                <i class="' . $item_sub_menu['icon'] . ' nav-icon"></i>
                                                <p>' . $item_sub_menu["text"] . '</p>
                                            </a>
                                        </li>
                                    ';
                    } //end foreach
                    $html .= '</ul>
                            </li>
                            ';
                } //end else sizeof
            } //end else href != #
        } //end if 
    } //end foreach
    $html .= '</ul>';
    return $html;
}//end crear_menu_panel
