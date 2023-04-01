<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */


 defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 |--------------------------------------------------------------------------
 | Mis variables 
 |--------------------------------------------------------------------------
 |
 | Variable para los recursos del sistema publicos 
*/
define('RECURSOS','portal'); 
define('IMG','img');


define('RECURSOS_PANEL','panel/resources');
define('IMG_PANEL','panel/img');
define('RECURSOS_PLUGINS','panel/resources');
define('RECURSOS_ESPECIFICO','panel/js/especifico');
define('RECURSOS_DIST','panel/dist');

define("ALERT_SUCCESS",1); 
define("ALERT_DANGER",2);
define("ALERT_WARNING",3);
define("ALERT_INFO",4);


define("SEXO_MASCULINO", array('clave' => '1', 'sexo'=> 'masculino'));
define("SEXO_FEMENINO", array('clave' => '2', 'sexo' => 'femenino'));
define("RECURSOS_IMAGENES_USUARIO",'panel/img_usuario');

define("ESTATUS_DESHABILITADO",2);
define("ESTATUS_HABILITADO",1);
define("ROL_ADMINISTRADOR", array('clave' => 777, 'rol'=>'Administrador'));
define("ROL_OPERADOR", array('clave' => 888, 'rol'=>'Operador'));
define("ROL_USUARIO", array('clave' => 666, 'rol'=>'Usuario'));

define("ROLES", array('777' => "Administrador", '888'=>'Operador', '666' =>'Usuario'));

define("TAREA_PERFIL",'tarea_perfil');
define("TAREA_DASHBOARD",'tarea_dashboard');

define("TAREA_USUARIOS",'tarea_usuarios');
define("TAREA_USUARIO_NUEVO", 'tarea_usuario_nuevo');
define("TAREA_USUARIO_DETALLES",'tarea_detalles_usuario');

define("TAREA_BOLETOS",'tarea_boletos');
define("TAREA_BOLETO_NUEVO", 'tarea_boleto_nuevo');
define("TAREA_BOLETO_DETALLES",'tarea_detalles_boleto');

define("TAREA_METODOPAGO",'tarea_metodopago');
define("TAREA_METODOPAGO_NUEVO", 'tarea_metodopago_nuevo');
define("TAREA_METODOPAGO_DETALLES", 'tarea_detalles_metodopago');

define("TAREA_COMPRA",'tarea_compra');
define("TAREA_COMPRA_NUEVO", 'tarea_compra_nuevo');
define("TAREA_COMPRA_DETALLES",'tarea_detalles_compra');


define("ACCESO_ADMINISTRADOR", array(
    TAREA_DASHBOARD,
    TAREA_USUARIOS,
    TAREA_USUARIO_NUEVO,
    TAREA_USUARIO_DETALLES,
    TAREA_PERFIL,
    TAREA_METODOPAGO,
    TAREA_METODOPAGO_NUEVO,
    TAREA_METODOPAGO_DETALLES,
    TAREA_BOLETOS,
    TAREA_BOLETO_NUEVO,
    TAREA_BOLETO_DETALLES,
    TAREA_COMPRA,
    TAREA_COMPRA_NUEVO,
    TAREA_METODOPAGO_DETALLES
));

define("ACCESO_OPERADOR", array(
    TAREA_DASHBOARD,
    TAREA_BOLETOS,
    TAREA_BOLETO_NUEVO,
    TAREA_COMPRA,
    TAREA_COMPRA_NUEVO,
    TAREA_COMPRA_DETALLES,
    TAREA_PERFIL
));

define("ACCESO_USUARIO", array(
    TAREA_COMPRA,
    TAREA_COMPRA_NUEVO,
    TAREA_METODOPAGO,
    TAREA_METODOPAGO_NUEVO,
    TAREA_METODOPAGO_DETALLES
));
/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);
