<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav nav-justified py-2 nav-pills">
            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "registro"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=registro" class="nav-link active">Registro</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=registro" class="nav-link">Registro</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "ingreso"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=ingreso" class="nav-link active">Ingreso</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=ingreso" class="nav-link">Ingreso</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "contenido"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=contenido" class="nav-link active">Inicio</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=contenido" class="nav-link">Inicio</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "inventario"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=inventario" class="nav-link active">Inventario</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=inventario" class="nav-link">Inventario</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "rol"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=rol" class="nav-link active">Rol</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=rol" class="nav-link">Rol</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_GET["modulo"]) && $_GET["modulo"] == "salir"): ?>
                <li class="nav-item">
                    <a href="index.php?modulo=salir" class="nav-link active">Salir</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="index.php?modulo=salir" class="nav-link">Salir</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>       
</div>
