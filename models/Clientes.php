<?php

namespace Model;

class Clientes extends ActiveRecord
{
    protected static $tabla = 'c_terceros';
    protected static $columnasDB = ['cod_tercero', 'tipo', 'nit', 'dv', 'tip_nit', 'razon_social', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'direccion', 'telefono', 'plazo', 'regimen', 'cod_ciudad', 'e_mail1', 'fecha_ingreso', 'estado'];

    public $cod_tercero;
    public $tipo;
    public $nit;
    public $dv;
    public $tip_nit;
    public $razon_social;
    public $nombre1;
    public $nombre2;
    public $apellido1;
    public $apellido2;
    public $direccion;
    public $telefono;
    public $plazo;
    public $regimen;
    public $cod_ciudad;
    public $e_mail1;
    public $fecha_ingreso;
    public $estado;


    public function __construct($args = [])
    {
        $this->cod_tercero = $args['cod_tercero'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->nit = $args['nit'] ?? '';
        $this->dv = $args['dv'] ?? '';
        $this->tip_nit = $args['tip_nit'] ?? '';
        $this->razon_social = $args['razon_social'] ?? '';
        $this->nombre1 = $args['nombre1'] ?? '';
        $this->nombre2 = $args['nombre2'] ?? '';
        $this->apellido1 = $args['apellido1'] ?? '';
        $this->apellido2 = $args['apellido2'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->plazo = $args['plazo'] ?? '';
        $this->regimen = $args['regimen'] ?? '';
        $this->cod_ciudad = $args['cod_ciudad'] ?? '';
        $this->e_mail1 = $args['e_mail1'] ?? '';
        $this->fecha_ingreso = $args['fecha_ingreso'] ?? '';
        $this->fecha_ingreso = $args['estado'] ?? '';
    }

    // public function listar()
    // {
    //     if (!$this->log_usuario) {
    //         self::$alertas[] = 'El Email es obligatorio';
    //     }
    //     if (!$this->pwd_usuario) {
    //         self::$alertas[] = 'El Password es obligatorio';
    //     }
    //     return self::$alertas;
    // }

    // public function listar()
    // {
    //     $query = "SELECT * FROM " . self::$tabla;
    //     $resultado = self::$db->query($query);

    //     if ($resultado->fetchColumn() > 0) {
    //         $query = "SELECT * FROM " . self::$tabla;
    //         $resultado = self::$db->query($query);
    //     } else {
    //         self::$alertas[] = 'El Usuario no existe';
    //         return;
    //     }

    //     return $resultado;
    // }

    // public function comprobarPassword($resultado)
    // {
    //     $usuario = $resultado->fetch();
    //     if (!($this->pwd_usuario === $usuario['pwd_usuario'])) {
    //         self::$alertas[] = 'Contraseña incorrecta';
    //         return false;
    //     }
    //     return true;
    // }

    // public function autenticar()
    // {
    //     session_start();
    //     $query = "SELECT * FROM " . self::$tabla . " WHERE log_usuario = '" . $this->log_usuario . "'";
    //     $resultado = self::$db->query($query);
    //     $usuario = $resultado->fetch();

    //     //Lenar arreglo de sesion
    //     $_SESSION['login'] = true;
    //     $_SESSION['usuario'] = $usuario['nom_usuario'] . " " . $usuario['ape_usuario'];

    //     header('Location: /paginas/dashboard');
    // }
}
