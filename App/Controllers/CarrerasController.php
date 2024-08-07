<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;

class CarrerasController {
    
    public function index(){
        View::render("carreras");
    }
    

}
