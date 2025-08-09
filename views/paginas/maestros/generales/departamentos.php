<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$departamentos = json_decode(APIController::departamentos(), true);
$nombrePagina = 'Maestro de Departamentos';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $departamentos;
$editar = 'Departamento';
$campos = array('cod_departamento', 'dpt_codigo', 'dpt_nombre', 'pai_codigo', 'senal_iva');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>