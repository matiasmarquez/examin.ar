<?php

namespace App\Models\Abm;

/**
 * @author Matias
 */
class Formulario {
    
    private $formulario;
    
    private $nombre;
    private $metodo;
    private $accion;
    private $clase;
    private $campos = [];
    
    /**
     * Constructor de formulario
     *  
     * @param string $nombre
     * @param string $metodo
     * @param string $clase
     * @param string $accion
     */
    public function __construct($nombre, $metodo, $clase, $accion) {
        $this->nombre = $nombre;
        $this->metodo = $metodo;
        $this->clase  = $clase;
        $this->accion = $accion;
    }
    
    /**
     * Agrega un campo al formulario
     * 
     * @param Campo $campo
     */
    public function agregarCampo($campo) {
        $this->campos[] = $campo;
    }
    
    public function getHTMLFormulario() {
        $salida = '';
        $salida .= $this->getHTMLApertura();
        $salida .= $this->getHTMLCuerpo();
        $salida .= $this->getHTMLCierre();
        
        return $salida;
    }
    
    /**
     * Devuelve la apertura del formulario
     */
    private function getHTMLApertura() {
        $salida = '<form 
            class="' . $this->getClase() . '" 
            name="' . $this->getNombre() . '" 
            method="' . $this->getMetodo() . '" 
            action="' . $this->getAccion() . '"
            enctype="multipart/form-data"
        >';
        return $salida;
    }
    
    /**
     * Devuelve el cuerpo del formulario con
     * los labels y campos
     */
    private function getHTMLCuerpo() {
        /* @var $campos Campo */
        $salida = '';
        $campos = $this->getCampos();
        foreach ($campos as $campo) {
            $nombre      = $campo->getNombre();
            $clase       = $campo->getClase();
            $tipo        = $campo->getTipo();
            $label       = $campo->getEtiqueta();
            $obligatorio = $campo->getObligatorio();
            $valor       = $campo->getValor();
            
            $salida .= '<label for="' . $nombre . '">' . $label;
            if ($obligatorio) {
                $salida .= " *";
            }
            $salida .= '</label>' . PHP_EOL;
            switch ($tipo) {
                case CAMPO_TIPO_TEXTAREA:
                    $salida .= '<textarea
                        class="' . $clase . '"
                        name="' . $nombre . '"
                        value="' . $valor . '"
                    ></textarea>' . PHP_EOL;
                    break;
                default:
                    $salida .= '<input 
                        type="' .  $tipo . '" 
                        name="' . $nombre . '"
                        class="' . $clase . '"
                        value="' . $valor . '"
                    />' . PHP_EOL;
                    break;
            }
        }
        return $salida;
    }
    
    /**
     * Devuelve el cierre del formulario
     */
    private function getHTMLCierre() {
        $salida = '</form>';
        return $salida;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function getFormulario() {
        return $this->formulario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getMetodo() {
        return $this->metodo;
    }

    public function getClase() {
        return $this->clase;
    }

    public function getCampos() {
        return $this->campos;
    }
    
    public function getAccion() {
        return $this->accion;
    }
    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="Setters">
    public function setFormulario($formulario) {
        $this->formulario = $formulario;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setMetodo($metodo) {
        $this->metodo = $metodo;
        return $this;
    }

    public function setClase($clase) {
        $this->clase = $clase;
        return $this;
    }

    public function setCampos($campos) {
        $this->campos = $campos;
        return $this;
    }
    
    public function setAccion($accion) {
        $this->accion = $accion;
        return $this;
    }
    // </editor-fold>


}
