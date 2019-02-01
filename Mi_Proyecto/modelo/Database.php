<?php

class Database {

    public $db;
    private $dns = "mysql:host=localhost;dbname=proyecto_1ert";
    private $user = "root";
    private $pass = "";
    private static $instance;

    public function __construct() {
        $this->db = new PDO($this->dns, $this->user, $this->pass);
        $this->db->exec("SET NAMES 'utf8'");
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    /**
     * introduce datos en la base de datos a partir de un array
     * array=[campo=>dato]
     * @param string $tabla
     * @param array $datos
     * @return number
     */
    public function insert($tabla, $datos) {

        $sql_campos = '';
        $sql_valores = '';
        foreach ($datos as $campo => $valor) {
            $sql_campos .= ',' . $campo;
            $sql_valores .= ',"' . $valor . '"';
        }

        // Quito coma inicial
        $sql_campos = substr($sql_campos, 1);
        $sql_valores = substr($sql_valores, 1);

        $sql = "insert into $tabla ($sql_campos) values ($sql_valores)";

        return $this->db->exec($sql);
    }

}

?>