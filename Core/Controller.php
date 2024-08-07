<?php

namespace Core;
defined("RUTA_APP") OR die("Acceso denegado");

use \Core\View;

class Controller {
    
    static private $nombrePagina = 'Examin.ar';
    static private $title = 'Examin.ar';
    static private $telefono = '+54 341-4392141';
    static private $correo = 'examinar@gmail.com'; 
    static private $direccion = 'Bv. Oroño 634'; 
    static private $rutaLogo = '/imagenes/logo.png';
    
    public static function getHTMLApertura($pagActual) {
        $linksHeaders = [
            '<link rel="stylesheet" type="text/css" href="' . RUTA_PROYECTO. '/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css"/>',
            '<link rel="stylesheet" type="text/css" href="/libs/bootstrap/3.3.7/css/bootstrap.min.css"/>',
            '<link rel="stylesheet" type="text/css" href="/libs/animate/3.5.1/animate.css"/>',
            '<link rel="stylesheet" type="text/css" href="/libs/animsition/4.0.2/css/animsition.min.css"/>',
            '<link rel="stylesheet" type="text/css" href="/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>',
            '<link rel="stylesheet" type="text/css" href="/libs/fancybox/1.0.6/css/jquery.fancybox.css" />',
            '<link rel="stylesheet" type="text/css" href="/estilos/estilos.css"/>',
            '<link rel="stylesheet" type="text/css" href="/estilos/responsive-768.css"/>',
            '<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />',
            '<script type="text/javascript" src="/libs/jquery/3.2.1/jquery-3.2.1.min.js"></script>'
        ];
        View::set('pagActual', $pagActual);
        View::set('linksHeaders', $linksHeaders);
        View::set('title', self::$title);
        
        View::render('bloques/apertura');
    }
    
    public static function getHTMLMenu() {
        $linksMenu = [
            '<li class="active"><a href="index.html">Home</a></li>',
            '<li><a href="quienes-somos.html">Quiénes somos</a></li>',
            '<li><a href="carreras.html">Carreras</a></li>',
            '<li><a href="novedades.html">Novedades</a></li>',
            '<li><a href="contacto.html">Contacto</a></li>'  
        ];
        View::set('linksMenu', $linksMenu);
        View::set('telefono', self::$telefono);
        View::set('correo', self::$correo);
        View::set('rutaLogo', self::$rutaLogo);
        
        View::render('bloques/menu');
    }
    
    public static function getHTMLPie() { 
        View::set('nombrePagina', self::$nombrePagina);
        View::set('direccion', self::$telefono);
        View::set('telefono', self::$telefono);
        View::set('correo', self::$correo);
        View::set('direccion', self::$direccion);
        View::set('rutaLogo', self::$rutaLogo);
        
        View::render("bloques/pie");
    }
    
    public static function getHTMLCierre() {
        $linksCierre = [
            '<script type="text/javascript" src="/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>',
            '<script type="text/javascript" src="/scripts/examinar-general.js"></script>',
            '<script type="text/javascript" src="/libs/fancybox/1.0.6/js/jquery.fancybox.pack.js"></script>',
            '<script type="text/javascript" src="/libs/jquery-easing/1.3/jquery.easing.min.js"></script>',
            '<script type="text/javascript" src="/libs/fancybox/1.0.6/js/jquery.fancybox-media.js"></script>',
            '<script type="text/javascript" src="/libs/animsition/4.0.2/js/animsition.min.js"></script>'
        ]; 
        View::set("linksCierre", $linksCierre);
        
        View::render("bloques/cierre");
    }
    
    public function guardarArchivo($carpeta, $archivo) {
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
            move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$archivo);
        }
    }
    
    public function getArchivo() {
        $archivo = null;
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
            $archivoNombre = $_FILES['imagen']['name'];
            $exp = explode(".", $archivoNombre);
            $archivoExtension = end($exp);
            $archivoId = $_SESSION['id'];
            $archivo = "archivo" . $archivoId . "." . $archivoExtension;
        }
        return $archivo;
    }
}