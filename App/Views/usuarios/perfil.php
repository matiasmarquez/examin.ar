<?php

use Core\Controller;

$pagActual = 'usuarioEditar';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();
?>

<div class="seccion-titulo seccion-titulo-contacto">
    <div class="container">
        <h1>Mis datos</h1>
        <span>Edición de datos personales</span>
    </div>
</div>

<section class="usuarios-perfil">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <?php if (isset($_SESSION['imagen'])) : ?>
                            <div class="usuarios-perfil-imagen-contenedor">
                                <img class="img-responsive usuarios-perfil-imagen" src="<?= $_SESSION['imagen'] ?>"/>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-9">
                        <h3><?=$nombre . " " . $apellido?></h3>
                        <?php if (isset($_SESSION['permiso']) and $_SESSION['permiso'] == 0) : ?>
                            <p class="usuario-admin">Administrador</p>
                        <?php elseif ($_SESSION['permiso'] == 1) : ?>
                            <p class="usuario-profesor">Profesor</p>
                        <?php else : ?>
                            <p class="usuario-alumno">Alumno</p>
                        <?php endif; ?>
                    </div>
                </div>
                <hr/>
                <div class="alert alert-dismissible alert-alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p><strong><i class="fa fa-info-circle"></i> ACLARACIÓN</strong></p> 
                    <p>
                        - Todo campo con <strong>* (asterisco)</strong> es obligatorio y no debe quedar en blanco.
                    </p>
                    <p>
                        - Si no desea cambiar un campo déjelo como está. Lo mismo con su contraseña, si no la desea cambiar
                        deje el campo <strong>vacío</strong>, en caso contrario, ingrese su nueva contraseña.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="usuarios-perfil-formulario-contenedor">
                    <?php if (isset($satisfactorio)) : ?>
                        <div class="alert alert-absolute alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p><strong><i class="fa fa-thumbs-o-up"></i> FELICITACIONES</strong></p> 
                            <?= $satisfactorio ?>
                        </div>
                        <div class="usuarios-perfil-formulario-mensaje-on">
                    <?php endif; ?>
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-absolute alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p><strong><i class="fa fa-thumbs-o-down"></i> HA OCURRIDO UN ERROR</strong></p> 
                            <?= $error ?>
                        </div>
                        <div class="usuarios-perfil-formulario-mensaje-on">
                    <?php endif; ?>
                    <?= $formulario ?>
                    <?php if (isset($satisfactorio) or isset($error)) : ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>