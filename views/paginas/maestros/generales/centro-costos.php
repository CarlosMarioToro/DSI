<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';
session_start();

$centroCostos = json_decode(APIController::centroCostos(), true);
// echo json_encode($centroCostos);
// print_r($_SESSION);
$nombrePagina = 'Maestro de Centro de Costos';

// $_SESSION['nombrePagina'] = 'Maestro de Centro de Costos';
$columnas = array('Codigo', 'Nombre', 'Acciones');
$tablas = $centroCostos;
$editar = 'Centro de Costo';
$campos = array('ccc_codigo', 'ccc_nombre');
// $_SESSION['columnas'] = $columnas;
// $_SESSION['usuario'] = $_SESSION['usuario'];
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>