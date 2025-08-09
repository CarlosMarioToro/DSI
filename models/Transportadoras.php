<?php

namespace Model;

class Transportadoras extends ActiveRecord
{
    protected static $tabla = 'c_transportadoras';
    protected static $columnasDB = ['cod_transportador', 'des_transportador', 'cod_tercero'];

    public $cod_transportador;
    public $des_transportador;
    public $cod_tercero;


    public function __construct($args = [])
    {
        $this->ciu_codigo = $args['cod_transportador'] ?? '';
        $this->ciu_nombre = $args['des_transportador'] ?? '';
        $this->ciu_cod_dian = $args['cod_tercero'] ?? '';
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
