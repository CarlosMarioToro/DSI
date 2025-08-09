<?php

namespace Model;

class Usuario extends ActiveRecord
{
    protected static $tabla = 'c_usuarios';
    protected static $columnasDB = ['cod_usuario', 'log_usuario', 'pwd_usuario', 'nom_usuario', 'ape_usuario', 'permiso', 'permiso_nivel_medio', 'permiso_nivel_alto', 'mostrar_entradas'];

    public $cod_usuario;
    public $log_usuario;
    public $pwd_usuario;
    public $nom_usuario;
    public $ape_usuario;
    public $permiso;
    public $permiso_nivel_medio;
    public $permiso_nivel_alto;
    public $mostrar_entradas;


    public function __construct($args = [])
    {
        $this->cod_usuario = $args['cod_usuario'] ?? '';
        $this->log_usuario = $args['log_usuario'] ?? '';
        $this->pwd_usuario = $args['pwd_usuario'] ?? '';
        $this->nom_usuario = $args['nom_usuario'] ?? '';
        $this->ape_usuario = $args['ape_usuario'] ?? '';
        $this->permiso = $args['permiso'] ?? '';
        $this->permiso_nivel_medio = $args['permiso_nivel_medio'] ?? '';
        $this->permiso_nivel_alto = $args['permiso_nivel_alto'] ?? '';
        $this->mostrar_entradas = $args['mostrar_entradas'] ?? '';
    }

    // public function validar()
    // {
    //     if (!$this->log_usuario) {
    //         self::$alertas[] = 'El Email es obligatorio';
    //     }
    //     if (!$this->pwd_usuario) {
    //         self::$alertas[] = 'El Password es obligatorio';
    //     }
    //     return self::$alertas;
    // }

    public function existeUsuario()
    {
        $query = "SELECT COUNT(*) FROM " . self::$tabla . " WHERE log_usuario = '" . $this->log_usuario . "'";
        $resultado = self::$db->query($query);

        if ($resultado->fetchColumn() > 0) {
            $query = "SELECT * FROM " . self::$tabla . " WHERE log_usuario = '" . $this->log_usuario . "'";
            $resultado = self::$db->query($query);
        } else {
            self::$alertas[] = 'El Usuario no existe';
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado)
    {
        $usuario = $resultado->fetch();
        if (!($this->pwd_usuario === $usuario['pwd_usuario'])) {
            self::$alertas[] = 'Contraseña incorrecta';
            return false;
        }
        return true;
    }

    public function autenticar()
    {
        session_start();
        $query = "SELECT * FROM " . self::$tabla . " WHERE log_usuario = '" . $this->log_usuario . "'";
        $resultado = self::$db->query($query);
        $usuario = $resultado->fetch();

        //Lenar arreglo de sesion
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario['nom_usuario'] . " " . $usuario['ape_usuario'] ?? 'Invitado';

        header('Location: /paginas/dashboard');
    }
}
