<?php

use Controllers\APIController;

require_once '../controllers/APIController.php';

$vendedores = json_decode(APIController::vendedores(), true);
$nombrePagina = 'Vendedores';

$columnas = array('Codigo', 'Nombre', 'Cod DIAN', 'Departamento', 'Acciones');
$tablas = $vendedores;
$editar = 'Vendedores';
$campos = array('cod_vendedor', 'nom_vendedor', 'fecha_inicio', 'sen_comision', 'num_cedula', 'estado', 'porc_comision', 'cod_tercero', 'cod_usuario');
?>
    <?php include '/Programacion/DSI-MVC-V4.2/views/layout/datagrid.php'; ?>