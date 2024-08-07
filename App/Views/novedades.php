<?php

use Core\Controller;

$pagActual = 'novedades';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>

<div class="seccion-titulo seccion-titulo-novedades">
    <div class="container">
        <h1 class="seccion-titulo">Nuestras novedades</h1>
        <span>Novedades de la institución</span>
    </div>
</div>

<section class="novedades">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="novedades-novedad">
                    <div class="novedades-novedad-imagen">
                        <div class="novedades-novedad-hover"></div>
                        <div class="novedades-novedad-link-contenedor">
                            <a href="ficha-novedad" class="fa fa-link"></a>
                            <a href="imagenes/novedades/1.jpg" class="fa fa-search fancy"></a>
                        </div>
                        <img src="imagenes/novedades/1.jpg"/>
                    </div>
                    <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                    <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="novedades-novedad">
                   <div class="novedades-novedad-imagen">
                       <div class="novedades-novedad-hover"></div>
                       <div class="novedades-novedad-link-contenedor">
                           <a href="ficha-novedad" class="fa fa-link"></a>
                           <a href="imagenes/novedades/2.jpg" class="fa fa-search fancy"></a>
                       </div>
                       <img src="imagenes/novedades/2.jpg"/>
                   </div>
                   <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                   <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="novedades-novedad">
                   <div class="novedades-novedad-imagen">
                       <div class="novedades-novedad-hover"></div>
                       <div class="novedades-novedad-link-contenedor">
                           <a href="ficha-novedad" class="fa fa-link"></a>
                           <a href="imagenes/novedades/3.jpg" class="fa fa-search fancy"></a>
                       </div>
                       <img src="imagenes/novedades/3.jpg"/>
                   </div>
                   <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                   <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="novedades-novedad">
                    <div class="novedades-novedad-imagen">
                        <div class="novedades-novedad-hover"></div>
                        <div class="novedades-novedad-link-contenedor">
                            <a href="ficha-novedad" class="fa fa-link"></a>
                            <a href="imagenes/novedades/1.jpg" class="fa fa-search fancy"></a>
                        </div>
                        <img src="imagenes/novedades/1.jpg"/>
                    </div>
                    <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                    <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="novedades-novedad">
                   <div class="novedades-novedad-imagen">
                       <div class="novedades-novedad-hover"></div>
                       <div class="novedades-novedad-link-contenedor">
                           <a href="ficha-novedad" class="fa fa-link"></a>
                           <a href="imagenes/novedades/2.jpg" class="fa fa-search fancy"></a>
                       </div>
                       <img src="imagenes/novedades/2.jpg"/>
                   </div>
                   <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                   <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="novedades-novedad">
                   <div class="novedades-novedad-imagen">
                       <div class="novedades-novedad-hover"></div>
                       <div class="novedades-novedad-link-contenedor">
                           <a href="ficha-novedad" class="fa fa-link"></a>
                           <a href="imagenes/novedades/3.jpg" class="fa fa-search fancy"></a>
                       </div>
                       <img src="imagenes/novedades/3.jpg"/>
                   </div>
                   <h3><a href="ficha-novedad">Donec mollis magna quis urna convallis</a></h3>
                   <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>