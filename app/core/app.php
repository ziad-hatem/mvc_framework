<?php

namespace MVC\core;

class app
{
    private $controllors;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        if (!empty($_SERVER["QUERY_STRING"])) {
            $url = explode('/', $_SERVER['QUERY_STRING']);
            $this->controllors = isset($url[0]) ? $url[0] . "controller" : "homecontroller";
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0], $url[1]);
            $this->params = array_values($url);
        } else {
            $this->controllors = "homecontroller";
            $this->method = "index";
            $this->params = [];
        }
    }
    private function render()
    {
        $controllor = "MVC\controllers\\" . $this->controllors;
        if (class_exists($controllor)) {
            $controllorObject = new $controllor();
            if (method_exists($controllorObject, $this->method)) {
                call_user_func_array([$controllorObject, $this->method], $this->params);
            } else {
                echo "Method not Found";
            }
        } else {
            echo "Class not Found";
        }
    }
}
