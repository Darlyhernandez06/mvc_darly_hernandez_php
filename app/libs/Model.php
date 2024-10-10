<?php

namespace sena\libs;

class model {
    protected $db;
    protected $connection;

    public function __constructor()
    {
        // Creamos una nueva instancia de la coneccion
        $this -> db = new Database();
        $this -> connection = $this -> db -> getConnection();
    }

    /**
     * Metodo para seleccionar todos los registros de una tabla en la base de datos
     * 
     * @param string $table
     * @return array
     */

    public function select($table = "")
    {
        $stm = $this -> connection -> prepare("SELECT * FROM $table");
        $stm -> execute();
        return $stm -> fetchAll();
    }
}