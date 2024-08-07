<?php

namespace Core;
defined("RUTA_APP") OR die("Acceso denegado");

class View {
    
    protected static $data;

    const RUTA_VISTAS = "../App/views/";

    const EXTENSION_TEMPLATES = "php";

    public static function render($template) {
        if(!file_exists(self::RUTA_VISTAS . $template . "." . self::EXTENSION_TEMPLATES)) {
            throw new \Exception("Error: El archivo " . self::RUTA_VISTAS . $template . "." . self::EXTENSION_TEMPLATES . " no existe", 1);
        }

        ob_start();
        if (self::$data !== null) {
            extract(self::$data);
        }
        include(self::RUTA_VISTAS . $template . "." . self::EXTENSION_TEMPLATES);
        $str = ob_get_contents();
        ob_end_clean();
        echo $str;
    }

    public static function set($name, $value) {
        self::$data[$name] = $value;
    }
}