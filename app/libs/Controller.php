<?php

namespace sena\libs;

class Controller{

     /** metodo para cargar un modelo desde la carpeta model
     * 
     * este metodo se utiliza para cargar los modelos de froma diamica, solo tienen que mencionar el nombre del modelo
     * 
     * @param string $model nombre del modeleo
     * @access public
     * @return object instancia del modelo 
    */

    public function model($model){
        //construye el nombre del modelo
        $model = "sena\model\\".$model;

        return new $model;
    }
    
    public function view($view, $data = [], $layout){
        ob_start();
        $view = $view .'.view';
        if (file_exists('../app/views/'.$view.'.php')) {
            require_once('../app/views/'.$view.'.php');
            $contend = ob_get_clean();
            require_once('../app/views/layout/'.$layout.'.layout.php');
        }else{
            die("la vista $view no existe");
        }

    }
}