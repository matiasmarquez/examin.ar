<?php

namespace App\Models\Abm;

/**
 * @author Matias Márquez
 */
class Abm {
    
    protected $formulario;
    
    protected $nombre;
    protected $metodo;
    protected $clase;
    
    protected $campos = [];
    
    protected $bdTabla;
    
    
    public function __construct($bdTabla, $nombre, $metodo, $clase) {
        $this->bdTabla = $bdTabla;
        $this->nombre = $nombre;
        $this->metodo = $metodo;
        $this->clase = $clase;
    }
    
    
    
    private function recuperarDato($campoBd) {
        $sql = "
            SELECT 
                " . $campoBd . "
            FROM 
                " . $this->bdTabla . "
            WHERE
                " . $condiciones . "
        ";
    }
    
    
    
    

    
    
    
}
