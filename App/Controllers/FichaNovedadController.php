<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;

class FichaNovedadController {
    
    public function index(){
        View::render("ficha-novedad");
    }
    

}
