<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$grInventarios = json_decode(APIController::grInventarios(), true);
$nombrePagina = 'Maestro de Grupos Inventarios';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $grInventarios;
$editar = 'Grupo de Inventarios';
$campos = array('cod_grupo', 'tipo', 'des_grupo');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>