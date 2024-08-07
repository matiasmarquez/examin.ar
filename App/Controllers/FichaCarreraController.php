<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;

class FichaCarreraController {
    
    public function index(){
        View::render("ficha-carrera");
    }
    

}
