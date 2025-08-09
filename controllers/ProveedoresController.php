<?php

namespace Controllers;

use Model\Proveedores;
use MVC\Router;

class ProveedoresController
{
    public static function proveedores(Router $router)
    {
        $resultado = Proveedores::all();
        // debuguear($resultado);
        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $auth = new Proveedores($_POST);
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
        $router->render('/paginas/maestros/generales/proveedores', []);
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: /');
    }
}
