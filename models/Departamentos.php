<?php

namespace Model;

class Departamentos extends ActiveRecord
{
    protected static $tabla = 'c_departamentos';
    protected static $columnasDB = ['cod_departamento', 'dpt_codigo', 'dpt_nombre', 'pai_codigo', 'senal_iva'];

    public $cod_departamento;
    public $dpt_codigo;
    public $dpt_nombre;
    public $pai_codigo;
    public $senal_iva;


    public function __construct($args = [])
    {
        $this->ciu_codigo = $args['cod_departamento'] ?? '';
        $this->ciu_nombre = $args['dpt_codigo'] ?? '';
        $this->ciu_cod_dian = $args['dpt_nombre'] ?? '';
        $this->cod_departamento = $args['pai_codigo'] ?? '';
        $this->cod_departamento = $args['senal_iva'] ?? '';
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
