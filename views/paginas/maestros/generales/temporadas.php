<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$temporadas = json_decode(APIController::temporadas(), true);
$nombrePagina = 'Temporadas';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $temporadas;
$editar = 'Temporadas';
$campos = array('cod_temporada', 'ano', 'des_temporada', 'fecha_inicial', 'fecha_final', 'cod_interno');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>