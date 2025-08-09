<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$barrios = json_decode(APIController::barrios(), true);
$nombrePagina = 'Barrios';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $barrios;
$editar = 'Barrios';
$campos = array('cod_barrio', 'des_barrio', 'cod_ciudad');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>