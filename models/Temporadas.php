<?php

namespace Model;

class Temporadas extends ActiveRecord
{
    protected static $tabla = 'c_temporadas_enc';
    protected static $columnasDB = ['cod_temporada', 'ano', 'des_temporada', 'fecha_inicial', 'fecha_final', 'cod_interno'];

    public $cod_temporada;
    public $ano;
    public $des_temporada;
    public $fecha_inicial;
    public $fecha_final;
    public $cod_interno;


    public function __construct($args = [])
    {
        $this->cod_temporada = $args['cod_temporada'] ?? '';
        $this->ano = $args['ano'] ?? '';
        $this->des_temporada = $args['des_temporada'] ?? '';
        $this->fecha_inicial = $args['fecha_inicial'] ?? '';
        $this->fecha_final = $args['fecha_final'] ?? '';
        $this->cod_interno = $args['cod_interno'] ?? '';
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
