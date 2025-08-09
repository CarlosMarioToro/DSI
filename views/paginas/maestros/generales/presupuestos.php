<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$presupuestos = json_decode(APIController::presupuestos(), true);
$nombrePagina = 'Presupuesto Ventas';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $presupuestos;
$editar = 'Presupuestos';
$campos = array('ano', 'mes', 'valor', 'dias_mes', 'unidades');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>