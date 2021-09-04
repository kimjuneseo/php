<?php

namespace src\App;


class DB
{
    private static $db = null;

    private static function getDB()
    {
        $option = [ \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ];

        if(is_null(self::$db)){
            self::$db = new \PDO("mysql:host=localhost; dbname=tododb; charset=utf8mb4", "root", "", $option);
        }
        return self::$db;
    }

    
    public static function execute($sql, $data=[])
    {
        $q = self::getDB()->prepare($sql);
        return $q->execute($data);  //성공적으로 실행됬다. 안됬다.
    }

    //한개만 가져오는 로직
    public static function fetch($sql, $data=[])
    {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetch();
    }

    //전체를 가져오는 로직
    public static function fetchAll($sql, $data=[])
    {
        $q = self::getDB()->prepare($sql);
        $q->execute($data);
        return $q->fetchAll();
    }

    public static function lastId()
    {
        return self::getDB()->lastInsertId();
    }
}

