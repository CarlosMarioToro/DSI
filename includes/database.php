
<?php
function conectarDB()
{
    $serverName = "localhost"; // Puede ser "localhost" o "127.0.0.1"
    $database = "bd_zonatex";
    $username = "Hgi";
    $password = "Hgi";

    try {
        $dsn = "sqlsrv:Server=$serverName;Database=$database";
        $pdo = new PDO($dsn, $username, $password);
        $GLOBALS['nombre_bd'] = $database;

        // Configurar PDO para manejar errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    return $pdo;
}
?>
