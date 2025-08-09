<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$paises = json_decode(APIController::paises(), true);
$nombrePagina = 'Maestro de Paises';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $paises;
$editar = 'Paises';
$campos = array('codpais', 'despais', 'country_code');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>