<?php

// Directorio del proyecto
define("RUTA_PROYECTO", dirname(__DIR__));

define("PRUEBA_PROYECTO", $_SERVER['DOCUMENT_ROOT']);
 
// Directorio app
define("RUTA_APP", RUTA_PROYECTO . '/App');
 
// Autoload con namespaces
function autoload_classes($class_name) {
    $filename = RUTA_PROYECTO . '/' . str_replace('\\', '/', $class_name) .'.php';
    if (is_file($filename)) {
        include_once $filename;
    }
}

// Registramos el autoload autoload_classes
spl_autoload_register('autoload_classes');

//instanciamos la app
$app = new \Core\App;

session_start();

//lanzamos la app
$app->render();
