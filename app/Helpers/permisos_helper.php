<?php


function comprobar_acceso($tarea_actual = ''){
    $acceso = FALSE;

    $session = session();

    switch($session->rol_actual){
        case ROL_ADMINISTRADOR['clave']: 
            $acceso = in_array($tarea_actual, ACCESO_ADMINISTRADOR);
            break;
        case ROL_OPERADOR['clave']: 
            $acceso = in_array($tarea_actual, ACCESO_OPERADOR);
            break;
       case ROL_USUARIO['clave']: 
            $acceso = in_array($tarea_actual, ACCESO_USUARIO);
            break; 
            default: $acceso = FALSE;
            break;
        
    }

    return $acceso;
}