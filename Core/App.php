<?php

namespace Core;
defined("RUTA_APP") OR die("Acceso denegado");

include(RUTA_APP . "/Config/constantes.php");

class App {
    
    private $controller;

    private $method = "index";

    private $params = [];

    const NAMESPACE_CONTROLLERS = "\App\Controllers\\";

    const RUTA_CONTROLLERS = "../App/controllers/";

    public function __construct() {
        
        //obtenemos la url parseada
        $url = $this->parseUrl();
        
        if ($url === null) {
            $url[0] = "Index";
        }
        
        $url[0] = ucfirst($url[0]);
        $url[0] = implode('-', array_map('ucfirst', explode('-', $url[0])));
        $url[0] = str_replace('-', '', $url[0]);
        $url[0] = $url[0] . 'Controller';
        
        //comprobamos que exista el archivo en el directorio controllers
        if (file_exists(self::RUTA_CONTROLLERS . ucfirst($url[0]) . ".php")) {
            //nombre del archivo a llamar
            $this->controller = $url[0];
            //eliminamos el controlador de url, así sólo nos quedaran los parámetros del método
            unset($url[0]);
        } else {
            include RUTA_APP . "/views/errors/404.php";
            exit;
        }

        //obtenemos la clase con su espacio de nombres
        $fullClass = self::NAMESPACE_CONTROLLERS . $this->controller;

        //asociamos la instancia a $this->controller
        $this->controller = new $fullClass;

        //si existe el segundo segmento comprobamos que el método exista en esa clase
        if (isset($url[1])) {
            //aquí tenemos el método
            $this->method = $url[1];
            if(method_exists($this->controller, $url[1])) {
                //eliminamos el método de url, así sólo nos quedaran los parámetros del método
                unset($url[1]);
            } else {
                throw new \Exception("Error procesando método {$this->method}", 1);
            }
        }
        //asociamos el resto de segmentos a $this->params para pasarlos al método llamado, por defecto será un array vacío
        $this->params = $url ? array_values($url) : [];
    }

    /**
     * Parseamos la url en trozos
     * 
     * @return string
     */
    public function parseUrl() {
        $url = filter_input(INPUT_GET, "url");
        if(isset($url)) {
            return explode("/", filter_var(rtrim($url, "/"), FILTER_SANITIZE_URL));
        }
    }

    /**
     * Lanzamos el controlador/método que se ha llamado con los parámetros
     */
    public function render() {
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Devuelve la configuración de la app
     * 
     * @return array
     */
    public static function getConfig() {
        return parse_ini_file(RUTA_APP . '/config/config.ini');
    }

    /**
     * Devuelve el controlador actual
     * 
     * @return string
     */
    public function getController() {
        return $this->controller;
    }

    /**
     * Devuelve el método actual
     * 
     * @return string
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Devuelve los parametros actuales
     * 
     * @return array
     */
    public function getParams() {
        return $this->params;
    }
    
}

