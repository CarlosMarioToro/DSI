<?php

namespace Controllers;

use Model\Zonas;
use MVC\Router;

class ZonasController
{
    public static function zonas(Router $router)
    {
        $resultado = Zonas::all();
        // debuguear($resultado);
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $auth = new Zonas($_POST);
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
        $router->render('/paginas/maestros/generales/zonas', []);
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: /');
    }
}
