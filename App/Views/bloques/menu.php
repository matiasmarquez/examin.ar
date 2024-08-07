<header>
    <div class="navbar-top clearfix">
        <div class="container navbar-top-container">
            <div class="col-sm-6 navbar-top-columna hidden-xs">
                <p class="navbar-top-info"><strong>Teléfono:</strong> <?= $telefono ?> | <strong>Email:</strong> <?= $correo ?> </p>
            </div>
            <div class="col-sm-6">
                <div class="navbar-top-links">
                    <ul class="navbar-top-links-lista">
                        <?php if (!isset($_SESSION['id'])) : ?>
                            <li>
                                <a href="usuarios/login" class="navbar-top-links-link navbar-top-links-link-login animsition-link">
                                    <i class="fa fa-lock"></i> Iniciar sesión
                                </a>
                            </li>
                            <li>
                                <a href="#" class="navbar-top-links-link animsition-link">
                                    <i class="glyphicon glyphicon-user"></i> Registro
                                </a>
                            </li>
                        <?php else : ?>   
                            <li>
                                <a href="/usuarios/logout" class="navbar-top-links-link animsition-link">
                                    <i class="glyphicon glyphicon-off"></i> Cerrar sesión
                                </a>
                            </li>
                            <li>
                                <a href="#" class="navbar-top-links-link navbar-top-links-link-login animsition-link">
                                    <i class="glyphicon glyphicon-book"></i> Mis carreras
                                </a>
                            </li>
                            <li class="<?php echo ($pagActual === "usuarioEditar") ? "active" : "" ?>">
                                <a href="/usuarios/perfil" class="navbar-top-links-link navbar-top-links-link-login animsition-link">
                                    <?php 
                                    $permiso = $_SESSION['permiso'];
                                    if ($permiso == 0) : ?>
                                        <i class="glyphicon glyphicon-user fa-user-admin"></i> 
                                    <?php elseif ($permiso == 1) : ?>
                                        <i class="fa fa-user fa-user-profesor"></i>
                                    <?php else : ?>
                                        <i class="fa fa-user fa-user-alumno"></i>
                                    <?php endif; ?>
                                    <?= $_SESSION['usuario'] ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default clearfix">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?= $rutaLogo ?>" alt="Logo Examin.ar"/>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php echo ($pagActual === "index") ? "active" : "" ?>"><a href="/index" class="animsition-link">Home</a></li>
                    <li class="<?php echo ($pagActual === "quienes-somos") ? "active" : "" ?>"><a href="/quienes-somos" class="animsition-link">Quiénes somos</a></li>
                    <li class="<?php echo ($pagActual === "carreras") ? "active" : "" ?>"><a href="/carreras" class="animsition-link">Carreras</a></li>
                    <li class="<?php echo ($pagActual === "novedades") ? "active" : "" ?>"><a href="/novedades" class="animsition-link">Novedades</a></li>
                    <li class="<?php echo ($pagActual === "contacto") ? "active" : "" ?>"><a href="/contacto" class="animsition-link">Contacto</a></li> 
                </ul>
            </div>
        </div>
    </nav>
</header>    