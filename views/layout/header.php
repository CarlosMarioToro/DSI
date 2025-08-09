<header class="header">
    <div class="logoMenu">
        <div class="logo_dsi icono-original"></div>
    </div>
    <div class="mobileMenu">
        <img class="mobile-menu">
    </div>
    </div>
    <div class="mensaje">
        <?php if ($auth) : ?>
            <a href="/logout" class="logout">
                <img src="/build/img/icons8-salida-64.svg" alt="Menu">
            </a>
        <?php endif; ?>
        <div class="fecha">
            <?php
            $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            echo $diassemana[date('w')] . ", " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
            ?>
        </div>
        <img src="/build/img/dark-mode.svg" alt="" class="dark-mode-boton">
    </div>
</header>