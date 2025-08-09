<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$ciudades = json_decode(APIController::ciudades(), true);
$nombrePagina = 'Maestro de Ciudades';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $ciudades;
$editar = 'Ciudad';
$campos = array('ciu_codigo', 'ciu_nombre', 'ciu_cod_dian', 'cod_departamento');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>