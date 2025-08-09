<?php

namespace Controllers;

use Model\CentroCostos;
use MVC\Router;

class CentroCostosController
{
    public static function centroCostos(Router $router)
    {
        $resultado = CentroCostos::all();
        // debuguear($resultado);
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $auth = new centroCostos($_POST);
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
        $router->render('/paginas/maestros/generales/centro-costos', []);
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: /');
    }
}
