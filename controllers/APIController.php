<?php

namespace Controllers;

use Model\Barrios;
use Model\Bodegas;
use Model\Usuario;
use Model\CentroCostos;
use Model\Ciudades;
use Model\Clientes;
use Model\Departamentos;
use Model\GrInventarios;
use Model\Paises;
use Model\Presupuestos;
use Model\Proveedores;
use Model\Temporadas;
use Model\Transportadoras;
use Model\Vendedores;
use Model\Zonas;

class APIController
{
    public static function index()
    {
        $usuarios = Usuario::all();
        echo json_encode($usuarios);
    }

    public static function centroCostos()
    {
        $centroCostos = CentroCostos::all();
        return json_encode($centroCostos);
        echo json_encode($centroCostos);
    }

    public static function ciudades()
    {
        $ciudades = Ciudades::all();
        return json_encode($ciudades);
        echo json_encode($ciudades);
    }

    public static function departamentos()
    {
        $departamentos = Departamentos::all();
        return json_encode($departamentos);
        echo json_encode($departamentos);
    }

    public static function transportadoras()
    {
        $transportadoras = Transportadoras::all();
        return json_encode($transportadoras);
        echo json_encode($transportadoras);
    }

    public static function paises()
    {
        $paises = Paises::all();
        return json_encode($paises);
        echo json_encode($paises);
    }

    public static function proveedores()
    {
        $proveedores = Proveedores::all();
        return json_encode($proveedores);
        echo json_encode($proveedores);
    }

    public static function clientes()
    {
        $clientes = Clientes::all();
        return json_encode($clientes);
        echo json_encode($clientes);
    }

    public static function presupuestos()
    {
        $presupuestos = Presupuestos::all();
        return json_encode($presupuestos);
        echo json_encode($presupuestos);
    }

    public static function vendedores()
    {
        $vendedores = Vendedores::all();
        return json_encode($vendedores);
        echo json_encode($vendedores);
    }

    public static function zonas()
    {
        $zonas = Zonas::all();
        return json_encode($zonas);
        echo json_encode($zonas);
    }

    public static function barrios()
    {
        $barrios = Barrios::all();
        return json_encode($barrios);
        echo json_encode($barrios);
    }

    public static function temporadas()
    {
        $temporadas = Temporadas::all();
        return json_encode($temporadas);
        echo json_encode($temporadas);
    }

    public static function bodegas()
    {
        $bodegas = Bodegas::all();
        return json_encode($bodegas);
        echo json_encode($bodegas);
    }

    public static function grInventarios()
    {
        $grInventarios = GrInventarios::all();
        return json_encode($grInventarios);
        echo json_encode($grInventarios);
    }
}
