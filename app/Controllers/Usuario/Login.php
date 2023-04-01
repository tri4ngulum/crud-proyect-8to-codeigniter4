<?php

namespace App\Controllers\Usuario;

use App\Controllers\BaseController;


class Login extends BaseController
{
    private function crear_vista($nombre_vista = '')
    {
        return view($nombre_vista);
    }

    public function login_cliente()
    {
        $session = session();
        if (isset($session->sesion_iniciada)) {
            if ($session->modulo_permitido == FALSE) {
                return redirect()->to(route_to('error_401'));
            }
            return redirect()->to(route_to('dashboard'));
        } else {
            return $this->crear_vista('user/login.php');
        }
    }


    public function login()
    {
        $session = session();
        if (isset($session->sesion_iniciada)) {
            if ($session->modulo_permitido == FALSE) {
                return redirect()->to(route_to('error_401'));
            }
            return redirect()->to(route_to('dashboard'));
        } else {
            return $this->crear_vista('user/loginAD.php');
        }
    }

    public function validar()
    {
        //  dd('Vou a validar tu información.');
        $password = $this->request->getPost("password");
        $email = $this->request->getPost("email");

        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        // dd($tabla_usuarios->validar_usuario($email,$password));

        $usuario = $tabla_usuarios->validar_usuario($email, hash("sha256", $password));

        if ($usuario != NULL) {

            if ($usuario['estatus_usuario'] == ESTATUS_HABILITADO) {
                $session = session();
                $session->set("sesion_iniciada", TRUE);
                $session->set("id_usuario", $usuario["id_usuario"]);
                $session->set("nombre_completo", $usuario['nombre_usuario'] . ' ' . $usuario['ap_paterno_usuario'] . ' ' . $usuario['ap_materno_usuario']);
                $session->set("nombre_usuario", $usuario['nombre_usuario']);
                $session->set("sexo_usuario", $usuario['sexo_usuario']);
                $session->set("email_usuario", $usuario['email_usuario']);
                $session->set("imagen_usuario", (!is_null($usuario['imagen_usuario']))
                    ? $usuario['imagen_usuario'] : (($usuario['sexo_usuario'] == SEXO_MASCULINO['clave'])
                        ? "male.png" : "female.png"));
                $session->set("rol_actual", $usuario['id_rol']);
                $session->set("tarea_actual", TAREA_DASHBOARD);

                mensaje("Bienvenido", ALERT_INFO, 2000);
                return redirect()->to(route_to('dashboard'));
            } else {
                mensaje("Error tu usuario está deshabilitado", ALERT_WARNING, 2000);
                return redirect()->to(route_to('login'));
            }
        }else{
                mensaje("Error en los campos", ALERT_WARNING, 2000);
                return redirect()->to(route_to('login'));
        }
    }
}
