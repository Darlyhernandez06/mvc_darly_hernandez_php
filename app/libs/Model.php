<?php

namespace sena\libs;

class model{
    protected $db;
    protected $connection;

    public function __construct(){
        //creamos una nueva instancia de la conexion
        $this->db = new Database();

        $this->connection =  $this->db->getConnection();
    }

    /** metodo paa seleccionar todos los registros de una tabla en la base de datos
     * 
     * @param string $table
     * @return array
    */

    public function select($table){
        $stm = $this->connection->prepare("SELECT * FROM $table");
        $stm->execute();

        return $stm->fetchAll();
    }

    public function getById($table = "", $id)
    {
        $sta = $this->connection->prepare("SELECT * FROM $table WHERE id = :id");
        $stm ->binValue(":id", $id);
        $stm ->execute();
        return $stm ->fetch();
    }
}