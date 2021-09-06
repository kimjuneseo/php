<?php

namespace src\App;

Class DB
{
    private static $db = null;

    private static function getDB()
    {
        $option = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ];

        if(is_null(self::$db)){
            self::$db = new \PDO("mysql:host=localhost; dbname=boards; charset=utf8mb4;", "root", "", $option);
        }
        return self::$db;
    }

    public static function execute($sql, $data=[]){
        $q = DB::getDB()->prepare($sql);
        return $q->execute($data);
    }

    public static function fetch($sql, $data=[]){
        $q = DB::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetch();
    }

    public static function fetchAll($sql, $data=[]){
        $q = DB::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll();
    }
}

