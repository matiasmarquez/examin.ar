<footer>
    <div class="pie-superior">
        <div class="container text-center">
            <img src="<?= $rutaLogo ?>" alt="Logo Examin.ar" class="pie-imagen img-responsive"/>
            <p class="pie-texto">© 2016 <?= $nombrePagina ?> - Todos los derechos reservados</p>
        </div>
    </div>
    <div class="pie-inferior">
        <div class="container text-center">
            <div class="pie-inferior-email">
                <i class="fa fa-envelope-o"></i>
                <a href="#"><?= $correo ?></a>
            </div>
            <div class="pie-inferior-telefono">
                <i class="fa fa-mobile"></i>
                <span><?= $telefono ?></span>
            </div>
            <div class="pie-inferior-direccion">
                <i class="fa fa-map-marker"></i>
                <span><?= $direccion ?></span>
            </div>
        </div>
    </div>
</footer>