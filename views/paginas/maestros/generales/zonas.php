<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$zonas = json_decode(APIController::zonas(), true);
$nombrePagina = 'Zonas';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $zonas;
$editar = 'Zonas';
$campos = array('cod_zona', 'nom_zona');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>