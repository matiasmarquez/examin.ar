<?php

use Core\Controller;
$pagActual = 'quienes-somos';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>
<div class="seccion-titulo seccion-titulo-quienes-somos">
    <div class="container">
        <h1 class="seccion-titulo">Quiénes somos</h1>
        <span>Nuestra historia</span>
    </div>
</div>
        
<section class="quienes-somos-historia">
    <div class="container">
        <div class="row">
            <div class="col-md-6 quienes-somos-historia-contenido">
                <h2 class="titulo-borde quienes-somos-titulo">Un poco sobre nosotros...</h2>
                <p class="quienes-somos-texto">
                    Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit. Vivamus 
                    orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecenas accumsan, massa nec vulputate 
                    congue.<br/><br/>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla 
                    ut metus varius laoreet. Quisque rutrum.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores 
                    et ea rebum. <br/><br/>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem 
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                    dolore magna aliquyam erat.
                </p>
            </div>
            <div class="col-md-6 quienes-somos-historia-imagen"></div>
        </div>
    </div>
</section>

<div class="container">
    <hr class="quienes-somos-separador"/>
</div>

<section class="quienes-somos-ofrecimiento">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="quienes-somos-cajas">
                    <div class="animated fadeIn active" data-box="1">
                        <img src="imagenes/quienes-somos/1.jpg" class="img-responsive"/>
                    </div>
                    <div class="animated fadeIn" data-box="2">
                        <img src="imagenes/quienes-somos/3.jpg" class="img-responsive"/>
                    </div>
                    <div class="animated fadeIn" data-box="3">
                        <img src="imagenes/quienes-somos/2.jpg" class="img-responsive"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="titulo-borde quienes-somos-titulo">Nosotros ofrecemos</h2>
                <p data-box-text="1" class="quienes-somos-texto quienes-somos-texto-tab active animated fadeIn">
                    Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit. Vivamus 
                    orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecenas accumsan, massa nec vulputate 
                    congue.<br/><br/>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla 
                    ut metus varius laoreet. Quisque rutrum.
                </p>
                <p data-box-text="2" class="quienes-somos-texto quienes-somos-texto-tab  animated fadeIn">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores 
                    et ea rebum. <br/><br/>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem 
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                    dolore magna aliquyam erat.
                </p>
                <p data-box-text="3" class="quienes-somos-texto quienes-somos-texto-tab  animated fadeIn">                         
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
                    eu feugiat nulla <br/><br/>facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum 
                    zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing 
                    elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
                <div class="quienes-somos-tabs">
                    <a href="#" data-boxs-tab="1" class="active">Educación</a>
                    <a href="#" data-boxs-tab="2">Conocimiento</a>
                    <a href="#" data-boxs-tab="3">Salida laboral</a>
                </div>
            </div>
        </div>
    </div>    
</section>

<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>