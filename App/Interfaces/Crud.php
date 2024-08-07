<?php

namespace App\Interfaces;
defined("RUTA_APP") OR die("Acceso denegado");
 
interface Crud {

    public static function getAll();

    public static function getById($id);

    public static function insert($data);

    public static function update($data);

    public static function delete($id);
}
