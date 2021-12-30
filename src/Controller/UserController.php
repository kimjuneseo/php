<?php

namespace src\Controller;

class UserController extends MasterController
{
    public function registerPage()
    {
        $this ->render("user/register", []);
    }

    public function registerProcess()
    {
        // \PDO::FETCH_OBJ = 5
        // \PDO::ATTR_DEFAULT_FETCH_MODE = 19
        $option = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ];
        $db = new \PDO("mysql:host=localhost; dbname=todo; charset=utf8mb4", "root", "", $option);

        $sql = "INSERT INTO `users`(`id`, `name`, `password`, `level`) VALUES (?,?,?,?)";

        $q = $db->prepare($sql);
        $q->excute(["rlawnstj8586@naver.com", "서울디지텍", "12", 2]);
        // $db->exec($sql);
        
    }
}

// 영상42:44