<?php

//para portal
function configure_navbar($folder = '', $pagina = '')
{
  $session = session();

  $menu = array();
  $menu_item  = array();
  $sub_menu_item = array();

  //Opcion Inicio
  $menu_item['is_active'] = ($pagina == "index") ? TRUE : FALSE;
  $menu_item['href'] = route_to('/');
  $menu_item['text'] = 'Inicio';
  $menu_item['submenu'] = array();
  $menu['Inicio'] = $menu_item;

  if ($session->id_usuario != NULL) {
    $menu_item['is_active'] = ($pagina == "cerrar_sesion") ? TRUE : FALSE;
    $menu_item['href'] = route_to('cerrar');
    $menu_item['text'] = 'Cerrar Sesion';
    $menu_item['submenu'] = array();
    $menu['Salir'] = $menu_item;

   $menu_item['is_active'] = ($pagina == "dashboard") ? TRUE : FALSE;
    $menu_item['href'] = route_to('dashboard');
    $menu_item['text'] = 'Dashboard';
    $menu_item['submenu'] = array();
    $menu['Panel'] = $menu_item;
  } else {
    //Opcion Ingresar
    $menu_item['is_active'] = ($pagina == "login") ? TRUE : FALSE;
    $menu_item['href'] = route_to('login');
    $menu_item['text'] = 'Login';
    $menu_item['submenu'] = array();
    $menu['Ingresar'] = $menu_item;


  }

  //Opcion Juegos
  $menu_item['is_active'] = ($pagina == "JuegosPD") ? TRUE : FALSE;
  $menu_item['href'] = route_to('juegosd');
  $menu_item['text'] = 'Juegos';
  $menu_item['submenu'] = array();
  #Submenus
  #juegos
  $sub_menu_item = array();
  $sub_menu_item['is_active'] = FALSE;
  $sub_menu_item['href'] = route_to('juegospd');
  $sub_menu_item['text'] = 'Todos los Juegos';
  $menu_item['submenu']['juegos'] = $sub_menu_item;
  #descripcion de los juegos
  $sub_menu_item = array();
  $sub_menu_item['is_active'] = FALSE;
  $sub_menu_item['href'] = route_to('juegosd');
  $sub_menu_item['text'] = 'Descripcion';
  $menu_item['submenu']['descripcion'] = $sub_menu_item;
  $menu['Juegos'] = $menu_item;

  //Opcion Acerca de Nosotros
  $menu_item['is_active'] = ($pagina == "about") ? TRUE : FALSE;
  $menu_item['href'] = route_to('about');
  $menu_item['text'] = 'Acerca de nosostros';
  $menu_item['submenu'] = array();
  $menu['Acerca de nosostros'] = $menu_item;

  //Opcion Contacto
  $menu_item['is_active'] = ($pagina == "contact") ? TRUE : FALSE;
  $menu_item['href'] = route_to('contact');
  $menu_item['text'] = 'Contacto';
  $menu_item['submenu'] = array();
  $menu['Contacto'] = $menu_item;

  return $menu;
} //end



function create_navbar($folder = '', $pagina = '')
{
  $menu = configure_navbar($folder, $pagina);
  $html = '';
  $html .= '<ul>';
  foreach ($menu as $item) {
    if ($item['href'] != '#') {
      $html .= '<li class="' . ($item["is_active"] ? 'active' : '') . '"><a href="' . $item["href"] . '">' . $item["text"] . '</a></li>';
    } else {
      $html .= '<li class="dropdown' . ($item["is_active"] ? 'active' : '') . '"><a href="#">' . $item["text"] . ' <span class="arrow_carrot-down"></span></a>';
      $html .= '<ul>';
      if (sizeof($item['submenu']) > 0) {
        foreach ($item['submenu'] as $item_sub_menu) {
          $html .= '<li><a href="' . $item_sub_menu["href"] . '">' . $item_sub_menu["text"] . '</a></li>';
        }
      }

      $html .= '</ul></li>';
    }
  }
  $html .= '</ul>';
  return $html;
} //end
