<?php

namespace sena\model;
use sena\libs\model;


class User extends model{

    protected $table = "users";

    public function __construct(){
        parent::__construct();
    }

    public function getUsers(){
        return $this->select($this->table);
    }

    public function getUse($id)
    {
        return $this ->getById($this -> $table, $id);
    }
}