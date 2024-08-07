<?php

use Core\Controller;

$pagActual = 'novedades';

Controller::getHTMLApertura($pagActual);
Controller::getHTMLMenu();

?>

<section class="ficha-novedad">
    <article class="ficha-novedad-contenedor">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <h1 class="ficha-novedad-titulo">Lorem ipsum dolor sit amet</h1>
                    <div class="ficha-novedad-meta">
                        Por <a href="#">Juan Rodriguez</a> - Abril 03, 2017
                    </div>
                    <div class="ficha-novedad-imagen">
                        <img src="imagenes/novedades/ficha.jpg" width="870" height="426" alt="Ficha novedad" class="img-responsive"/>
                    </div>
                    <div class="ficha-novedad-contenido">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed venenatis vulputate. Nulla venenatis mi sed fermentum laoreet. Aenean consequat eros nec sem ultrices tempus. In fringilla porttitor lectus in aliquet. Aliquam elit ipsum, accumsan vitae sagittis eget, ultricies at purus. Pellentesque neque libero, dapibus et rhoncus sed, vestibulum et dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <br><br>In sed pellentesque leo. Nunc non ipsum ex. Sed mattis sem sit amet orci dapibus, eget feugiat urna porttitor. Etiam tincidunt at ex quis iaculis. Maecenas consectetur porttitor est et mollis. Sed in vehicula ligula. In interdum ut orci dapibus semper. Quisque tristique risus ut augue rutrum, vitae faucibus felis interdum. Mauris sagittis sem vel dignissim porta. Nullam sit amet risus ut purus eleifend tempor quis in sem. Morbi ac hendrerit purus. Vivamus venenatis consequat viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt urna ut lobortis tristique. Nunc in urna non leo vehicula rhoncus ac in sapien.</p>
                    </div>
                </div> 
            </div>     
        </div>
    </article> 
</section>

<?php

Controller::getHTMLPie();
Controller::getHTMLCierre();
?>