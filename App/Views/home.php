<?php

use Core\Controller;

$pagActual = 'index';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>
<section class="novedad-destacada">
    <div class="novedad-destacada-overlay"></div>
    <div class="container text-center">
        <div class="novedad-contenido">
            <h1 class="novedad-titulo animated fadeInDown">Nuevo sistema de evaluaciones</h1>
            <p class="novedad-descripcion-breve animated fadeIn">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Mauris vehicula gravida nibh in tincidunt. Donec id eros augue. 
                Pellentesque ultricies lacinia nisl, efficitur malesuada quam.
            </p>
            <a href="#" class="novedad-link boton boton-transparente-blanco animated fadeInUp">Ver más</a>
        </div>
    </div>
</section>

<section class="servicios">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="servicios-titulo">Ahora podes cursar de manera online y desde tu casa</h2>
                <p class="servicios-descripcion">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <a href="#" class="servicios-link boton boton-3d-redondeado margin-bottom-30">Ver más</a>
            </div>
            <div class="col-md-6 col-lg-offset-1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="servicios-servicio">
                            <i class="servicios-icono servicios-icono-1"></i>
                            <h4 class="servicios-servicio-titulo">Forma rápida</h4>
                            <p class="servicios-servicio-descripcion">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  tincidunt ut laoreet</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="servicios-servicio">
                            <i class="servicios-icono servicios-icono-2"></i>
                            <h4 class="servicios-servicio-titulo">Aprende de manera fácil</h4>
                            <p class="servicios-servicio-descripcion"> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="servicios-servicio">
                            <i class="servicios-icono servicios-icono-3"></i>
                            <h4 class="servicios-servicio-titulo">Soporte 24/7</h4>
                            <p class="servicios-servicio-descripcion">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="servicios-servicio">
                            <i class="servicios-icono servicios-icono-4"></i>
                            <h4 class="servicios-servicio-titulo">Alcance su meta</h4>
                            <p class="servicios-servicio-descripcion"> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="destacado-imagen">
    <div class="destacado-imagen-overlay"></div>
    <div class="section-2-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="destacado-imagen-titulo">Aprender online es más fácil que antes</h2>
                    <p class="destacado-imagen-descripcion">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <a href="#" class="destacado-imagen-link boton boton-3d-redondeado boton-3d-redondeado-blanco margin-bottom-60">Ver como funciona</a>
                </div>
                <div class="col-md-7">
                    <div class="destacado-imagen-imagen">
                        <img src="imagenes/destacado/destacado.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carreras-destacadas">
    <div class="container">
        <h3 class="titulo-borde">Carreras destacadas</h3>
        <div class="row">
            <div class="carreras-destacadas-contenedor">
                <div class="col-xs-12 col-custom-6 col-md-4">
                    <div class="carreras-carrera">
                        <div class="carreras-carrera-hover">
                            <img src="imagenes/cursos/1.jpg" class="img-responsive"/>
                            <div class="carreras-carrera-hover-fondo carreras-carrera-fondo-1"></div>
                            <a href="ficha-carrera" class="carreras-carrera-link">Ver más</a>
                        </div>
                        <div class="carreras-carrera-nombre clearfix">
                            <h3><a href="ficha-carrera">Analista de sistemas</a></h3>
                        </div>
                        <div class="carreras-carrera-descripcion-contenedor carreras-carrera-fondo-1 clearfix">
                            <div class="carreras-carrera-descripcion">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut pretium augue, eu gravida nisl. Vivamus id aliquet diam. In euismod tellus ut blandit pretium. Maecenas nisl eros, sagittis sed tristique vel, dictum vel erat.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-custom-6 col-md-4">
                    <div class="carreras-carrera">
                        <div class="carreras-carrera-hover">
                            <img src="imagenes/cursos/2.jpg" class="img-responsive"/>
                            <div class="carreras-carrera-hover-fondo carreras-carrera-fondo-2"></div>
                            <a href="ficha-carrera" class="carreras-carrera-link">Ver más</a>
                        </div>
                        <div class="carreras-carrera-nombre clearfix">
                            <h3><a href="ficha-carrera">Desarrollador de software</a></h3>
                        </div>
                        <div class="carreras-carrera-descripcion-contenedor carreras-carrera-fondo-2 clearfix">
                            <div class="carreras-carrera-descripcion">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut pretium augue, eu gravida nisl. Vivamus id aliquet diam. In euismod tellus ut blandit pretium. Maecenas nisl eros, sagittis sed tristique vel, dictum vel erat.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-custom-6 col-md-4">
                    <div class="carreras-carrera">
                        <div class="carreras-carrera-hover">
                            <img src="imagenes/cursos/3.jpg" class="img-responsive"/>
                            <div class="carreras-carrera-hover-fondo carreras-carrera-fondo-3"></div>
                            <a href="ficha-carrera" class="carreras-carrera-link">Ver más</a>
                        </div>
                        <div class="carreras-carrera-nombre clearfix">
                            <h3><a href="ficha-carrera">Infraestructura de tecnología</a></h3>
                        </div>
                        <div class="carreras-carrera-descripcion-contenedor carreras-carrera-fondo-3 clearfix">
                            <div class="carreras-carrera-descripcion">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut pretium augue, eu gravida nisl. Vivamus id aliquet diam. In euismod tellus ut blandit pretium. Maecenas nisl eros, sagittis sed tristique vel, dictum vel erat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="novedades-ultimas">
    <div class="container">
        <h3 class="titulo-borde">Últimas novedades</h3>
        <div class="row">
            <div class="novedades-ultimas-contenedor">
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
    </div>
</section>


<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>



