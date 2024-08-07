<?php

namespace App\Models\Usuarios;
defined("RUTA_APP") OR die("Acceso denegado");

/**
 * @author Matias
 */
class Usuario {
    
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $usuario;
    private $password;
    private $imagen;
    private $habilitado;
    private $permiso;
    
    /**
     * @param string $nombre
     * @param string $apellido
     * @param int $dni
     * @param string $usuario
     * @param string $password
     * @param int $habilitado
     * @param int $permiso
     */
    function __construct($id, $nombre, $apellido, $dni, $usuario, $password, $imagen = null, $habilitado = 0, $permiso) {
        $this->id           = $id;
        $this->nombre       = $nombre;
        $this->apellido     = $apellido;
        $this->dni          = $dni;
        $this->usuario      = $usuario;
        $this->password     = $password;
        $this->habilitado   = $habilitado;
        $this->permiso      = $permiso;
        $this->imagen       = $imagen;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function getId() {
        return $this->id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getHabilitado() {
        return $this->habilitado;
    }

    public function getPermiso() {
        return $this->permiso;
    }
    
    public function getImagen() {
        return $this->imagen;
    }
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Setters">
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
        return $this;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setHabilitado($habilitado) {
        $this->habilitado = $habilitado;
        return $this;
    }

    public function setPermiso($permiso) {
        $this->permiso = $permiso;
        return $this;
    }
    
    public function setImagen($imagen) {
        $this->imagen = $imagen;
        return $this;
    }
    // </editor-fold>

}
