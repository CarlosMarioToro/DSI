<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class AuthController
{
    public static function login(Router $router)
    {
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $auth = new Usuario($_POST);
            $alertas = $auth->validar();

            if (empty($alertas)) {
                // Verificar si el usuario existe
                $resultado = $auth->existeUsuario();
                if (!$resultado) {
                    $alertas = Usuario::getalertas();
                } else {
                    // Verificar el Password
                    if ($auth->comprobarPassword($resultado)) {
                        // Autenticar el usuario
                        $auth->autenticar();
                    } else {
                        $alertas = Usuario::getAlertas();
                    }
                }
            }
        }
        $router->render('paginas/login', [
            'errores' => $alertas
        ]);
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: /');
    }
}
