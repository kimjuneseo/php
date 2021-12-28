<?php

namespace src\App;

class Route
{
    private static $actions = [];

    public static function __callStatic($method, $args)
    {
        // 서버의 현재 요청에 맞는 라우트만 $action에 넣어준다.
        $req = strtolower($_SERVER['REQUEST_METHOD']);

        if($req == $method){
            self::$actions[] = $args;
        }
    }
    
    public static function init()
    {
        $path = $_SERVER['REQUEST_URI']; // 사용자가 요청한 URL을 받아온다.
        $path = explode("?", $path);   // ?기준으로 잘라서 배열에 각각 넣어준다
        $path = $path[0]; // 잘린 첫번째꺼
        foreach(self::$actions as $req)
        {
            if($req[0] == $path){
                $action = explode("@", $req[1]);
                $controllerClass = '\\src\\Controller\\'. $action[0];
                $controller = new $controllerClass(); // php만 가능한 기능 문자열에 new하면 해당 클래스 인스턴스 생성
                $controller->{$action[1]}();

                return;
            }    
        }
        echo "404 Not Found Page";
     }
    
}


// Route::get
//        post,   get , put   , delete
// CRUD : Create, Read, Update, Delete