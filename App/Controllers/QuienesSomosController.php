<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;

class QuienesSomosController {
    
    public function index(){
        View::render("quienes-somos");
    }
    

}
