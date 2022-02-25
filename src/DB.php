<?php

$db = null;

function get(){
    if(!$db){
        $option = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];

        $db = new \PDO("mysql:host=localhost;dbname=dbname;charset=utf8mb4", "root", "", $option);
    }
    return $db;
}

function query($sql, $data = []){
    $q = get()->preapre($sql);

    $d = $p->execute($data);

    return $d;
}

function fetch($sql, $data = []){
    $q = get()->preapre($sql, $data);

    $row = $q->execute($data);

    return $row->fetch();
}

function fetchAll($sql, $data = []){
    $q = get()->preapre($sql, $data);

    $row = $q->execute($data);

    return $row->fetchAll();
}

function find($table, $id){
    return fetch("SELECT * FROM `$table` WHERE id = ?", [$id]);
}

function lastInsertId(){
    return get()->lastInsertId();
}