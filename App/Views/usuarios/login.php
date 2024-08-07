<?php

use Core\Controller;

$pagActual = 'login';

Controller::getHTMLApertura($pagActual);
?>

<section class="login">
    <div class="login-logo text-center">
        <img src="/imagenes/logo.png" alt="Logo Examin.ar"/>
    </div>
    <div class="login-panel">
        <?php if (isset($error)) : ?>
            <div class="alert alert-absolute alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p><strong><i class="fa fa-thumbs-o-down"></i> HA OCURRIDO UN ERROR</strong></p> 
                <?= $error ?>
            </div>
        <?php endif; ?>
        <div class="login-panel-body">
            <h3>Iniciar sesión</h3>
            <form method="POST" action="/usuarios/login" name="login" class="login-form">
                <label class="navbar-top-links-label">Usuario:</label>
                <input type="text" class="navbar-top-links-campo" name="usuario"/>
                <label class="navbar-top-links-label">Contraseña:</label>
                <input type="password" class="navbar-top-links-campo" name="password"/>
                <button class="boton boton-3d-redondeado boton-chico-bloque" type="submit" name="submit">Iniciar sesión</button>
            </form>
            <div class="login-separador"></div>
            <a href="#" class="login-link">¿Olvidó su contraseña?</a>
            <a href="#" class="login-link">¿No esta registrado aún?</a>
        </div>
    </div>
    <div class="login-copy text-center">
        <p>Copyrights © Todos los derechos reservados Examin.ar</p>
    </div>
</section>

<?php

Controller::getHTMLCierre();
?>
