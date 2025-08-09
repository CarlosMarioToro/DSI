<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$clientes = json_decode(APIController::clientes(), true);
$nombrePagina = 'Maestro de Clientes';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $clientes;
$editar = 'Clientes';
$campos = array('cod_tercero', 'tipo', 'nit', 'dv', 'tip_nit', 'razon_social', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'direccion', 'telefono', 'plazo', 'regimen', 'cod_ciudad', 'e_mail1', 'fecha_ingreso', 'estado');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>