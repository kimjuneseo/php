<?php
namespace src\App;

class DB
{
    private static $db = null;

    private static function getDB()
    {
        if(is_null(self::$db)){
            self::$db = new \PDO("mysql:host=localhost; dbname=todo; charset=utf8mb", "root", "1234")

            
        }
        return self::$db
    }
}