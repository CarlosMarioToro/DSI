<?php

namespace Model;

class Bodegas extends ActiveRecord
{
    protected static $tabla = 'c_bodegas';
    protected static $columnasDB = ['cod_bodega', 'des_bodega', 'tipo_bodega', 'cod_tercero', 'bod_predeterminada', 'estado', 'cod_sucursal'];

    public $cod_bodega;
    public $des_bodega;
    public $tipo_bodega;
    public $cod_tercero;
    public $bod_predeterminada;
    public $estado;
    public $cod_sucursal;


    public function __construct($args = [])
    {
        $this->cod_bodega = $args['cod_bodega'] ?? '';
        $this->des_bodega = $args['des_bodega'] ?? '';
        $this->tipo_bodega = $args['tipo_bodega'] ?? '';
        $this->cod_tercero = $args['cod_tercero'] ?? '';
        $this->bod_predeterminada = $args['bod_predeterminada'] ?? '';
        $this->estado = $args['estado'] ?? '';
        $this->cod_sucursal = $args['cod_sucursal'] ?? '';
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
