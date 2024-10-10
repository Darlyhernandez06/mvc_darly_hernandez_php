<?php

namespace sena\libs;

class Core {
    protected $controller = 'mainController';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct(){
        $url = $this->getURL();
        if ($url != "" && file_exists('../app/controllers/'.ucwords($url[0]) . 'Controller.php')) {
            $this->controller = ucwords($url[0]) . 'Controller';
            unset($url[0]);
        }
        $obj = 'sena\\controllers\\' . $this->controller;
        $this->controller = new $obj;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            } else {
                die("El método solicitado no fue programado");
            }
        }

        $this->parameters = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->parameters);
    }

    public function getURL(){
        $url = "";
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
        }

        echo "<pre>";
        print_r($url);
        echo "</pre>";
        return $url;
    }
}
