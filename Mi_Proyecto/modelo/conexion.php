<?php

class Conexion {

    private $conex;
    private static $_instance; //La única instancia
    private $_host = "127.0.0.1";
    private $_username = "root";
    private $_password = "";
    private $_database = "proyecto_1ert";

    /*
      Obtener una instancia de la base de datos
      @return Instance
     */

    public static function getInstance() {
        if (!self::$_instance) { // Si no hay conexion entonces haz una
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    // Constructor
    private function __construct() {
        $this->conex = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        // Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }

    // El clon del método mágico está vacío para evitar la duplicación de la conexión
    private function __clone() {
        
    }

    // Get mysqli connection
    public function getConnection() {
        return $this->conex;
    }

    public function query($sql) {
        $rs = $this->conex->query($sql);
        if ($this->conex->error) {
            echo "<p>ERROR en CONSULTA: $sql</p>";
            echo $this->conex->error;
            die("Fin programa");
        }
        return $rs;
    }

}

