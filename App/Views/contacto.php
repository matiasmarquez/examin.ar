<?php

use Core\Controller;

$pagActual = 'contacto';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>

<div class="seccion-titulo seccion-titulo-contacto">
    <div class="container">
        <h1>Contáctenos</h1>
        <span>Haga su consulta aquí</span>
    </div>
</div>

<section class="contacto">
    <div class="container">
        <div class="contacto-mapa-contenedor">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.351860846358!2d-60.6542672883057!3d-32.94171849432827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab40b5347f53%3A0x8bf842441a81fc69!2sBv.+Oro%C3%B1o+634%2C+Rosario%2C+Santa+Fe!5e0!3m2!1ses-419!2sar!4v1493343156046" style="pointer-events:none;" allowfullscreen></iframe>
        </div>
        <div class="contacto-contenido">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 contacto-formulario-contenedor">
                        <h4 class="titulo-borde contacto-titulo">Consultenos aquí</h4> 
                        <form method="post" action="#" class="formulario contacto-formulario">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre"/>
                            <label for="nombre">Correo</label>
                            <input type="text" name="correo"/>
                            <label for="nombre">Mensaje</label>
                            <textarea name="mensaje" rows="3"></textarea>
                            <button type="submit" class="boton boton-3d-redondeado pull-right">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h4 class="titulo-borde contacto-titulo">Nuestros datos</h4>
                        <h5 class="contacto-subtitulo"><i class="fa fa-map-marker"></i> Dirección</h5>
                        <p class="contacto-dato">Bv. Oroño 634</p>
                        <hr class="contacto-separador"/>    
                        <h5 class="contacto-subtitulo"><i class="fa fa-envelope-o"></i> Correo</h5>
                        <p class="contacto-dato"><a href="mailto:examinar@gmail.com">examinar@gmail.com</a></p>
                        <hr class="contacto-separador"/>    
                        <h5 class="contacto-subtitulo"><i class="fa fa-phone"></i> Teléfono</h5>
                        <p class="contacto-dato">+54 341-4392141</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>