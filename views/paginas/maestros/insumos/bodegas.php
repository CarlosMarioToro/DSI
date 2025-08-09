<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$bodegas = json_decode(APIController::bodegas(), true);
$nombrePagina = 'Bodegas';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $bodegas;
$editar = 'Bodegas';
$campos = array('cod_bodega', 'des_bodega', 'tipo_bodega', 'bod_predeterminada');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>