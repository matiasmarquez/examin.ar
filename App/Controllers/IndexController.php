<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;
use \Core\Controller;

class IndexController {
    
    public function index(){
        View::render("home");
    }
    
}
