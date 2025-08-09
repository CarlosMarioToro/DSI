<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$transportadoras = json_decode(APIController::transportadoras(), true);
$nombrePagina = 'Maestro de Empresas Transportadoras';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $transportadoras;
$editar = 'Empresas Transportadoras';
$campos = array('cod_transportador', 'des_transportador', 'cod_tercero');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>