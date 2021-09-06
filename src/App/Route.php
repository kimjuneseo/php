<?php

namespace src\App;

Class Route
{
    private static $actions = [];

    public static function __callStatic($method, $args)
    {
        $req = strtolower($_SERVER['REQUEST_METHOD']);

        if($method === $req){
            self::$actions[] = $args;
        }
    }

    public static function init()
    {
        $path = $_SERVER['REQUEST_URI'];
        $path = explode('?', $path);
        $path = $path[0];

        foreach(self::$actions as $req){
            if($req[0] === $path){
                $action = explode('@', $req[1]);
                $controllerClass = "\\src\\Controller\\" . $action[0];
                $controller = new $controllerClass();
                $controller->{$action[1]}();

                return;
            }
        }
        echo "404 error";
    }
}