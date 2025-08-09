<?php

namespace Controllers;

use Model\Paises;
use MVC\Router;

class PaisesController
{
    public static function paises(Router $router)
    {
        $resultado = Paises::all();
        // debuguear($resultado);
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $auth = new Paises($_POST);
            // debugueaar($auth);
            // $alertas = $auth->validar();

            // if (empty($alertas)) {
            //     // Verificar si el usuario existe
            //     $resultado = CentroCostos::all();
            //     // debuguear($resultado);
            //     if (!$resultado) {
            //         $alertas = centroCostos::getErrores();
            //     } else {
            //         // Verificar el Password
            //         if ($auth->comprobarPassword($resultado)) {
            //             // debugueaar($resultado);
            //             // Autenticar el usuario
            //             $auth->autenticar();
            //         } else {
            //             $alertas = centroCostos::getErrores();
            //         }
            //     }
            // }
        }
        $router->render('/paginas/maestros/generales/paises', []);
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: /');
    }
}
