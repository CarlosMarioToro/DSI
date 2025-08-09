<div class="login">
    <div class="modal-content">
        <div class="imagen">
            <img src="/build/img/Logodsi.svg" alt="Logo DSI">
        </div>
        <h1>Acceso al Sistema</h1>
        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form action="/login" method="post">
            <label for="log_usuario">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="log_usuario"
                placeholder="Usuario" id="log_usuario" required>
            <label for="pwd_usuario">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="pwd_usuario"
                placeholder="Contraseña" id="pwd_usuario" required>
            <input type="submit" value="Acceder">
        </form>
    </div>
</div>