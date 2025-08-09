<?php
// debuguear($GLOBALS['nombre_bd'])
?>
<footer class="footer">
    <div>
        <strong>Base de Datos:</strong> <?php echo htmlspecialchars($GLOBALS['nombre_bd']); ?>

    </div>
    <div>
        <strong>Usuario:</strong> <?php echo htmlspecialchars($usuario); ?>
    </div>
    <div>
        <strong>© <?php echo date("Y"); ?> - DSI</strong>
    </div>
</footer>