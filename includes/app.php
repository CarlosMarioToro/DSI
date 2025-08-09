<?php
require 'funciones.php';
require 'database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectarnos a la BD
$db = conectarDB();

use Model\ActiveRecord;

ActiveRecord::setDb($db);
