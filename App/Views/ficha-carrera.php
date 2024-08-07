<?php

use Core\Controller;

$pagActual = 'carreras';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>

<div class="seccion-titulo seccion-titulo-carreras">
    <div class="container">
        <h1>Analista de sistemas</h1>
    </div>
</div>

<section class="ficha-curso">
    <div class="container">
        <div class="row">
            
            <div class="col-md-5">
                <div class="ficha-curso-sidebar">
                    <div class="ficha-curso-sidebar-imagen-contenedor">
                        <img src="imagenes/cursos/1.jpg" class="img-responsive" width="370" height="280" alt="Ficha curso"/>
                        <a href="#" class="boton boton-3d-redondeado boton-bloque">Empezar carrera</a>
                    </div>

                    <div class="ficha-curso-sidebar-informacion">
                        <div class="ficha-curso-sidebar-informacion-item">
                            <i class="fa fa-barcode"></i>
                            <h4>Código</h4>
                            <p>#15273</p>
                        </div>
                        <div class="ficha-curso-sidebar-informacion-item">
                            <i class="fa fa-clock-o"></i>
                            <h4>Duración</h4>
                            <p>1 año</p>
                        </div>
                        <div class="ficha-curso-sidebar-informacion-item">
                            <i class="fa fa-calendar-check-o"></i>
                            <h4>Apertura</h4>
                            <p>Abril 03, 2017</p>
                        </div>
                    </div>
                    <hr class="ficha-curso-separador">
                    <div class="ficha-curso-sidebar-requisitos">
                        <i class="fa fa-cog"></i>
                        <h4>Requisitos básicos</h4>
                        <div class="ficha-curso-sidebar-requisitos-cuerpo">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>Javascript</span>
                            <span>PHP</span>
                        </div>
                    </div>
                    <hr class="ficha-curso-separador">
                    <div class="ficha-curso-sidebar-compartir">
                        <i class="fa fa-share-alt"></i>
                        <h4>Compartir carrera</h4>
                        <div class="ficha-curso-sidebar-compartir-cuerpo">
                            <a href="#" class="twitter ficha-curso-sidebar-compartir-link" title="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="facebook ficha-curso-sidebar-compartir-link" title="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="google-plus ficha-curso-sidebar-compartir-link" title="google plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-md-7">
                <div class="ficha-curso-contenido-tabs">
                    <div class="nav-tabs-contenedor">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduccion" role="tab" data-toggle="tab">Introducción</a></li>
                            <li><a href="#materias" role="tab" data-toggle="tab">Materias</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane tab-pane-introduccion fade in active" id="introduccion">
                            <h4>Introducción</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                                enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit 
                                in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis 
                                at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
                                delenit augue duis dolore te feugait nulla facilisi.
                            </p>
                            <h4>Objetivos de la carrera</h4>
                            <p>
                                Nunc quis vulputate metus, ac dapibus ligula. Etiam interdum ornare rutrum. Class 
                                aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                                Nam elementum felis diam, non pellentesque est iaculis ac. Pellentesque habitant morbi 
                                tristique senectus et netus et malesuada fames ac turpis egestas. Sed ultricies hendrerit 
                                diam, eget molestie ipsum gravida vel. Mauris aliquam ante scelerisque odio tincidunt porttitor. 
                                Nulla vitae tellus dictum, vehicula eli.
                            </p>
                        </div>
                        <div class="tab-pane fade tab-pane-listado" id="materias">
                            <h4>
                                1° año
                                <a href="#" class="tab-pane-boton pull-right"><i class="fa fa-bars"></i></a>
                            </h4>
                            <ul class="tab-pane-lista">
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Programación</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Sistema de computación I</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Ingles I</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Matemáticas I</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Filosofía I</h5>
                                    </div>
                                </li>
                            </ul>
                            <h4>
                                2° año
                                <a href="#" class="tab-pane-boton pull-right"><i class="fa fa-bars"></i></a>
                            </h4>
                            <ul class="tab-pane-lista">
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Programación II</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Sistema de computación II</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Ingles II</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Matemáticas II</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Filosofía II</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Sistemas administrativos</h5>
                                    </div>
                                </li>
                            </ul>
                            <h4>
                                3° año
                                <a href="#" class="tab-pane-boton pull-right"><i class="fa fa-bars"></i></a>
                            </h4>
                            <ul class="tab-pane-lista">
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Sistemas de computación III</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Análisis estructurado</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Investigaciones Operativas</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>L.G.I</h5>
                                    </div>
                                </li>
                                <li class="tab-pane-item">
                                    <div class="tab-pane-item-contador">
                                        <span></span>
                                    </div>
                                    <div class="tab-pane-item-cuerpo">
                                        <h5>Seminario</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
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