<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ---------------------------------------------------------
// Rutas del portal 
// ---------------------------------------------------------
$routes->get('/', 'Portal\Home::index');
$routes->get('/contact', 'Portal\Home::contact');
$routes->get('/juegosd', 'Portal\Home::juegosd');
$routes->get('/juegospd', 'Portal\Home::juegospd');
$routes->get('/about', 'Portal\Home::about');

$routes->get('/acceso','Usuario\Login::login_cliente');


// ---------------------------------------------------------
// Rutas del crud
// ---------------------------------------------------------

//** LOGIN */
$routes->get('/login', 'Usuario\Login::login');
$routes->post('/validar_credenciales', 'Usuario\Login::validar',['as' => 'validar_credenciales']);
$routes->get('/cerrar', 'Usuario\Cerrar_acceso::index',['as' => 'cerrar']);
            
//** DASHBOARD */
$routes->get('/dashboard', 'Panel\Dashboard::index',['as' => 'dashboard']);


//** PERFIL */
$routes->get('/perfil', 'Panel\Perfil::index', ['as' => 'perfil']);
$routes->post('/actualizar_mi_perfil', 'Panel\Perfil::actualizar_perfil', ['as' => 'actualizar_mi_perfil']);
$routes->post('/actualizar_password', 'Panel\Perfil::actualizar_password', ['as' => 'actualizar_password']);


//** USUARIOS */
$routes->get('/usuarios','Panel\Usuarios::index',['as' => 'usuarios']);
$routes->get('/addusuarios','Panel\Usuarios_nuevo::addUsuario',['as' => 'add_usuario']);
$routes->get('/detusuarios', 'Panel\Usuarios::detUsuarios',['as' => 'det_usuario']);

// Registrar usuario
$routes->post('/registrar_usuario','Panel\Usuarios::registrar',['as' => 'registrar_usuario']);
// Editar usuario
$routes->post('/editar_usuario','Panel\Usuario_detalles::editar',['as' => 'editar_usuario']);
// Cambiar estatus de usuario
$routes->get('/estatus_usuario/(:num)/(:num)','Panel\Usuarios::estatus/$1/$2',['as' => 'estatus_usuario']);
// Eliminar usuario
$routes->get('/eliminar_usuario/(:num)','Panel\Usuarios::eliminar/$1',['as' => 'eliminar_usuario']);
// Detalles de usuario
$routes->get('/usuario_detalles/(:num)','Panel\Usuario_detalles::index/$1',['as' => 'usuario_detalles']);

//** BOLETOS */
$routes->get('/boletos','Panel\Boletos::index',['as' => 'boletos']);
$routes->get('/addboletos','Panel\Boletos::addBoleto',['as' => 'add_boletos']);
$routes->get('/detboletos','Panel\Boletos::detBoleto',['as' => 'det_boleto']);

// Registrar boleto 
$routes->post('/registrar_boleto','Panel\Boletos::registrar',['as' => 'registrar_boleto']);
// Editar boleto 
$routes->post('/editar_boleto','Panel\Boleto_detalles::editar',['as' => 'editar_boleto']);
// Cambiar estatus de boleto 
$routes->get('/estatus_boleto/(:num)/(:num)','Panel\Boleto::estatus/$1/$2',['as' => 'estatus_boleto']);
// Eliminar boleto 
$routes->get('/eliminar_boleto/(:num)','Panel\Boletos::eliminar/$1',['as' => 'eliminar_boleto']);
// Detalles de boleto 
$routes->get('/boleto_detalles/(:num)','Panel\Boleto_detalles::index/$1',['as' => 'boleto_detalles']);


//** COMPRAS */ 
$routes->get('/compras','Panel\Compras::index',['as' => 'compras']);
$routes->get('/detcompras','Panel\Compras::detCompras',['as' => 'compra_detalles']);
$routes->get('/addcompras','Panel\Compras::addCompras', ['as' => 'add_compras']);

// Registrar compras 
$routes->post('/registrar_compra','Panel\Compras::registrar',['as' => 'registrar_compras']);
// Editar boleto 
$routes->post('/editar_compra','Panel\Compras_detalles::editar',['as' => 'editar_compras']);
// Cambiar estatus de compras 
$routes->get('/estatus_compra/(:num)/(:num)','Panel\Compras::estatus/$1/$2',['as' => 'estatus_compras']);
// Eliminar compras 
$routes->get('/eliminar_compra/(:num)','Panel\Compras::eliminar/$1',['as' => 'eliminar_compras']);
// Detalles de compras 
$routes->get('/compras_detalles/(:num)','Panel\Compras_detalles::index/$1',['as' => 'compras_detalles']);


//** METODOS DE PAGO*/ 
$routes->get('/metodos_pago','Panel\MetodosPago::index',['as' => 'metodos_pago']);
$routes->get('/addmetodos_pago','Panel\MetodosPago::addMetodosPago',['as' => 'registrar_metodo_pago']);
$routes->get('/detmetodos_pago','Panel\MetodosPago::detMetodosPago',['as' => 'detalles_metodopago']);

// Registrar metodo de pago 
$routes->post('/registrar_metodopago','Panel\MetodosPago::registrar',['as' => 'registrar_metodo_pago']);
// Editar metodo de pago 
$routes->post('/editar_metodopago','Panel\MetodoPago_detalles::editar',['as' => 'editar_metodopago']);
// Cambiar estatus de metodo de pago 
$routes->get('/estatus_metodopago/(:num)/(:num)','Panel\MetodosPago::estatus/$1/$2',['as' => 'estatus_metodo_pago']);
// Eliminar boleto 
$routes->get('/eliminar_metodopago/(:num)','Panel\MetodosPago::eliminar/$1',['as' => 'eliminar_metodo_pago']);
// Detalles de boleto 
$routes->get('/metodo_pago_detalles/(:num)','Panel\MetodoPago_detalles::index/$1',['as' => 'metodo_pago_detalles']);




//=======================================================
// RUTAS PARA LOS ERRORES DEL SISTEMA
//=======================================================
$routes->get('/error_401', 'Errores\Error_401::index', ['as' => 'error_401']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
