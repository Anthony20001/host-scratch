<nav class="site-menu" id="ftco-navbar-spy">
    <div class="site-menu-inner" id="ftco-navbar">
        <ul class="list-unstyled">
            <?php if (!isset($_SESSION["id_usuario"])) { ?>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login") ?>">Inicia sesión</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("registro") ?>">Registrate</a></li>
            <?php } else { ?>
                <li><a href="index.php?">Inicio</a></li>
                <li><a href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar sesión</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>