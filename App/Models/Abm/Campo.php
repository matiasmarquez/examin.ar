<?php

namespace App\Models\Abm;

/**
 * @author Matías Márquez
 */
class Campo {
    
    private $campo;
    private $tipo;
    private $etiqueta;
    private $obligatorio;
    private $nombre;
    private $clase;
    private $valor = "";
    
    public function __construct($nombre, $tipo, $etiqueta, $valor, $obligatorio = false, $clase) {
        $this->tipo        = $tipo;
        $this->etiqueta    = $etiqueta;
        $this->nombre      = $nombre;
        $this->clase       = $clase;
        $this->obligatorio = $obligatorio;
        $this->valor       = $valor;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function getCampo() {
        return $this->campo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getEtiqueta() {
        return $this->etiqueta;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getClase() {
        return $this->clase;
    }
    
    public function getValor() {
        return $this->valor;
    }
    
    public function getObligatorio() {
        return $this->obligatorio;
    }
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Setters">
    public function setCampo($campo) {
        $this->campo = $campo;
        return $this;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function setEtiqueta($etiqueta) {
        $this->etiqueta = $etiqueta;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setClase($clase) {
        $this->clase = $clase;
        return $this;
    }
    
    public function setValor($valor) {
        $this->valor = $valor;
        return $this;
    }
    
    public function setObligatorio($obligatorio) {
        $this->obligatorio = $obligatorio;
        return $this;
    }
    // </editor-fold>

}
