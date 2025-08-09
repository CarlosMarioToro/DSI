<?php

namespace Model;

class Vendedores extends ActiveRecord
{
    protected static $tabla = 'c_vendedores';
    protected static $columnasDB = ['cod_vendedor', 'nom_vendedor', 'fecha_inicio', 'sen_comision', 'num_cedula', 'estado', 'porc_comision', 'cod_tercero', 'cod_usuario'];

    public $cod_vendedor;
    public $nom_vendedor;
    public $fecha_inicio;
    public $sen_comision;
    public $num_cedula;
    public $estado;
    public $porc_comision;
    public $cod_tercero;
    public $cod_usuario;


    public function __construct($args = [])
    {
        $this->cod_vendedor = $args['cod_vendedor'] ?? '';
        $this->nom_vendedor = $args['nom_vendedor'] ?? '';
        $this->fecha_inicio = $args['fecha_inicio'] ?? '';
        $this->sen_comision = $args['sen_comision'] ?? '';
        $this->num_cedula = $args['num_cedula'] ?? '';
        $this->estado = $args['estado'] ?? '';
        $this->porc_comision = $args['porc_comision'] ?? '';
        $this->cod_tercero = $args['cod_tercero'] ?? '';
        $this->cod_usuario = $args['cod_usuario'] ?? '';
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
