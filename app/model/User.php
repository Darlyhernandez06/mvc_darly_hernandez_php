<?php

namespace sena\libs;

use sena\libs\model;

class User extends model
{
    protected $table = "users";

    public function __constructor()
    {
        parent::__constructor();
    }

    public function getUsers()
    {
        return $this ->select($this -> table);
    }
}