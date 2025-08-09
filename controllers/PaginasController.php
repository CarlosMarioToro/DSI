<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
// use PHPMailer\PHPMailer\PHPMailer;

class PaginasController
{
    public static function login(Router $router)
    {
        $router->render('auth/login');
    }
    public static function dashboard(Router $router)
    {
        $router->render('paginas/dashboard');
    }
    public static function printer(Router $router)
    {
        $router->render('paginas/printer');
    }
    public static function calculadora(Router $router)
    {
        $router->render('paginas/calculadora');
    }
    public static function centroCostos(Router $router)
    {
        $router->render('/paginas/maestros/generales/centro-costos');
    }
    // public static function login(Router $router) {
    //     $router->render('paginas/login', []);
    // }
    // public static function nosotros(Router $router) {
    //     $router->render('paginas/nosotros');
    // }
    // public static function propiedades(Router $router) {
    //     $propiedades = Usuario::all();
    //     $router->render('paginas/propiedades', [
    //         'propiedades' => $propiedades
    //     ]);
    // }
    // public static function propiedad(Router $router) {
    //     $id = validarORedireccionar('/propiedades');
    //     // Buscar propiedad
    //     $propiedad = Usuario::find($id);
    //     $router->render('paginas/propiedad',[
    //         'propiedad' => $propiedad
    //     ]);
    // }
    // public static function blog(Router $router) {
    //     $router->render('paginas/blog');
    // }
    // public static function entrada(Router $router) {
    //     $router->render('paginas/entrada');
    // }
    // public static function contacto(Router $router) {
    //     $mensaje = null;
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $respuestas = $_POST['contacto'];
    //         // Crear una instancia de PHMailer
    //         $mail = new PHPMailer();
    //         // Configurar SMTP
    //         $mail->isSMTP();
    //         $mail->Host ='smtp.mailtrap.io';
    //         $mail->SMTPAuth = true;
    //         $mail->Username = 'e5e6c794a75fd5';
    //         $mail->Password = '531303627f0672';
    //         $mail->SMTPSecure ='tls';
    //         $mail->Port = 2525;

    //         // Configurar el contenido del mail
    //         $mail->setFrom('admin@bienesraices.com');
    //         $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
    //         $mail->Subject = 'Contacto desde Bienes Raices';

    //         //Habilitar HTML
    //         $mail->isHTML(true);
    //         $mail->CharSet = 'UTF-8';

    //         // Definir el contenido
    //         $contenido = '<html>';
    //         $contenido .= '<p>Tienes un nuevo mensaje</p>';
    //         $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';

    //         // Enviar de forma condicional alguns campos
    //         if ($respuestas['contacto'] === 'telefono'){ 
    //             $contenido .= `<p>Eligio ser contactado por telefono:</p>`;
    //             $contenido .= '<p>Telefono: ' . $respuestas['telefono'] . '</p>';
    //             $contenido .= '<p>Fecha de Contacto: ' . $respuestas['fecha'] . '</p>';
    //             $contenido .= '<p>Hora de Contacto: ' . $respuestas['hora'] . '</p>';
    //         } else {
    //             $contenido .= `<p>Eligio ser contactado por email:</p>`;
    //             $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
    //         }
    //         $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
    //         $contenido .= '<p>Vende o Compra: ' . $respuestas['tipo'] . '</p>';
    //         $contenido .= '<p>Pecio o Presupuesto: $' . $respuestas['precio'] . '</p>';
    //         $contenido .= '<p>Tipo de Contacto: ' . $respuestas['contacto'] . '</p>';
    //         $contenido .= '</html>';

    //         $mail->Body = $contenido;
    //         $mail->AltBody = 'Esto es texto alternativo sin HTML';

    //         // Enviar el email
    //         $mail->send();
    //         if ($mail->send()) {
    //             $mensaje = 'Mensaje enviado Correctamente';
    //         } else {
    //             $mensaje = 'Error al enviar el mensaje';
    //         }
    //     }

    //     $router->render('paginas/contacto', [
    //         'mensaje' => $mensaje
    //     ]);
    // }
}
