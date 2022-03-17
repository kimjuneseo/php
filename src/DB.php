<?php

class DB {
  static $db = null;
  static function get() {
    if (!self::$db) {
        $option = [ 19 => 5, 3 => 2];

      self::$db = new \PDO("mysql:host=localhost;dbname=newmvc1;charset=utf8mb4", "root", "", $option);
    }
    
    return self::$db;
  } 
} 

function query($sql, $data = []) {
  $q = DB::get()->prepare($sql);

  try {
    $q->execute($data);

    return $q;
  } catch(Exception $e) {
    echo "$e->getMessage() <br />";

    return false;
  }
}

function fetch($sql, $data = []) {
  $q = query($sql, $data);

  return $q ? $q->fetch() : $q;
}

function fetchAll($sql, $data = []) {
  $q = query($sql, $data);

  return $q ? $q->fetchAll() : $q;
}

function find($table, $id) {
  return fetch("SELECT * FROM `$table` WHERE id = ?", [$id]);
}

function lastInsertId(){
  return DB::get()->lastInsertId();
}

