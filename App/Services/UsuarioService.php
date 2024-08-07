<?php

namespace App\Services;
defined("RUTA_APP") OR die("Acceso denegado");

use \Core\Database;
use \App\Models\Usuarios\Usuario;

/**
 * @author Matias Márquez
 */
class UsuarioService {
    
    public function getAll() {
        try {
            $usuarios = [];
            $connection = Database::instance();
            $sql = "
                SELECT 
                    * 
                FROM 
                    usuarios
            ";
            $query = $connection->prepare($sql);
            $query->execute();
            $datos = $query->fetchAll();
            foreach ($datos as $dato) {
                $nombre         = $dato['nombre'];
                $apellido       = $dato['apellido'];
                $dni            = $dato['dni'];
                $usuario        = $dato['usuario'];
                $password       = $dato['password'];
                $habilitado     = $dato['habilitado'];
                $permiso        = $dato['permiso'];
                
                $usuarios[]     = new Usuario(
                        $nombre, 
                        $apellido, 
                        $dni, 
                        $usuario, 
                        $password, 
                        $habilitado, 
                        $permiso
                );
            }
            return $usuarios;
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage();
        }
    }
    
    public function getUsuario($campos, $condiciones = null) {
        $usuario = "";
        $camposBD = "";
        $connection = Database::instance();
        foreach ($campos as $campo) {
            $camposBD .= $campo ;
            if (next($campos)) {
                $camposBD .= ", ";
            }
        }
        $sql = "
            SELECT 
                " . $camposBD . "
            FROM 
                usuarios
            WHERE
                " . $condiciones . "
        ";
        $query = $connection->prepare($sql);
        $query->execute();
        $datosBD = $query->fetchAll();
        foreach ($datosBD as $datoDB) {
            $id         = $datoDB['id'];
            $nombre         = $datoDB['nombre'];
            $apellido       = $datoDB['apellido'];
            $dni            = $datoDB['dni'];
            $usuario        = $datoDB['usuario'];
            $password       = $datoDB['password'];
            $imagen         = $datoDB['imagen'];
            $habilitado     = $datoDB['habilitado'];
            $permiso        = $datoDB['permiso'];
            
            $usuario        = new Usuario(
                $id,
                $nombre, 
                $apellido,
                $dni, 
                $usuario, 
                $password,
                $imagen,
                $habilitado, 
                $permiso
            );
        }
        return $usuario;
    }
    
    public function updateUsuario($camposValores, $condiciones = null) {
        $camposValoresBD = "";
        $connection = Database::instance();
        foreach ($camposValores as $clave => $valor) {
            if ($clave === "password" and $valor === "") {
                continue;
            }
            $camposValoresBD .= $clave . '="' . $valor . '"';
            if ($clave === "usuario") {
                $_SESSION['usuario'] = $valor;
            }
            if (next($camposValores)) {
                $camposValoresBD .= ", " . PHP_EOL;
            }
        }
        $sql = "
            UPDATE 
                usuarios
            SET 
                " . $camposValoresBD . "
            WHERE
                " . $condiciones . "
        ";
        $query = $connection->prepare($sql);
        $query->execute();
    }
   
}
