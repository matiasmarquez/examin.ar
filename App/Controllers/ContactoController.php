<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;

class ContactoController {
    
    public function index(){
        View::render("contacto");
    }
    

}
