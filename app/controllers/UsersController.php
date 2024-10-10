<?php

namespace sena\controllers;

use sena\libs\Controller;

class UsersController extends Controller{

    protected $model = "";
    
    public function __construct(){
        $this->model = $this->model("User");
    }
    
    public function index(){
        $users = $this->model->getUsers();
        $data = [
            'title' => 'Listado de usuarios',
            'users' => $users
        ];
        $this->view('users/index', $data ,'app');
    }

    public function edit($id){
        $user = $this->model->getUser($id);

        $data = [
            'title' => 'Listado de usuarios',
            'users' => $users
        ];
        $this->view('users/index', $data ,'app');
    }

    public function update(){
        // echo<pre>
        // echo</pre>
    }
}