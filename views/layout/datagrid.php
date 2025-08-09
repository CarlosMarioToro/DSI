<h1><?php echo $nombrePagina; ?></h1>

<div class="contenedorDatagrid">
    <form method="GET" action="gruposinventarios.php">
        <input type="text" name="busqueda" placeholder="Buscar..." value="<?= $_GET['busqueda'] ?? '' ?>">
        <button type="submit">Buscar</button>
        <a href="index.php?action=exportar" target="_blank">Exportar a Excel</a>
    </form>
    <table class="datagrid" id="tablaUsuarios">
        <thead>
            <tr>
                <?php
                foreach ($campos as $campo) { ?>
                    <th><?php $camposJSON = json_encode($campos);
                        echo htmlspecialchars($campo); ?>
                    </th>

                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tablas as $tabla): ?>
                <tr>
                    <?php $attributes_string = ""; ?>
                    <?php foreach ($campos as $campo): ?>
                        <?php $attributes_string .= " data-" . $campo . "='" . $tabla[$campo] . "'"; ?>
                        <?php if ($campo === "estado") { ?>
                            <td>
                                <label class="label_radio">
                                    <input type="radio" name="estado_<?php echo $tabla[$campos[0]]; ?>"
                                        value="activo"
                                        <?php echo ($tabla['estado'] == 'A') ? 'checked' : ''; ?>>
                                    Act
                                </label>
                                <label class="label_radio">
                                    <input type="radio" name="estado_<?php echo $tabla[$campos[0]]; ?>"
                                        value="inactivo"
                                        <?php echo ($tabla['estado'] != 'A') ? 'checked' : ''; ?>>
                                    Inact
                                </label>
                            </td>
                        <?php } else { ?>
                            <td><?= $tabla[$campo] ?></td>
                        <?php }
                        ?>
                    <?php endforeach ?>
                    <td>
                        <button <?= $attributes_string ?> onclick="editar(this)"><img src="/build/img/edit-edit-3.svg" alt="Editar"></button>
                        <button><img src="/build/img/delete-delete-6.svg" alt="Eliminar"></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div id="modalEditar">
        <h3>Editar <?php echo $editar; ?></h3>
        <form id="formEditar" method="post" action="editar.php">
            <?php foreach ($campos as $campo): ?>
                <label for="<?php echo htmlspecialchars($campo); ?>"><?php echo htmlspecialchars($campo); ?>:</label>
                <input type="text" name="<?php echo htmlspecialchars($campo); ?>" id=<?php echo htmlspecialchars($campo); ?>>
            <?php endforeach ?>
            <button type="submit">Guardar</button>
            <button type="button" onclick="cerrarModal()">Cancelar</button>
        </form>
    </div>
</div>

<script>
    var campos = <?php echo $camposJSON; ?>;
</script>