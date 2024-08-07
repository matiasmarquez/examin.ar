<?php

namespace Core;
defined("RUTA_APP") OR die("Acceso denegado");

use \Core\App;

class Database {

    private $dbUser;

    private $dbPassword;

    private $dbHost;

    protected $dbName;
    
    private $connection;

    private static $instance;

    private function __construct() {
        try {
            $config = App::getConfig();
            $this->dbHost = $config["host"];
            $this->dbUser = $config["user"];
            $this->dbPassword = $config["password"];
            $this->dbName = $config["database"];

            $this->connection = new \PDO('mysql:host=' . $this->dbHost . '; dbname=' . $this->dbName, $this->dbUser, $this->dbPassword);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->exec("SET CHARACTER SET utf8");
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class;
        }
        return self::$instance;
    }

    /**
     * Evita que el objeto se pueda clonar
     */
    public function __clone() {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

}
