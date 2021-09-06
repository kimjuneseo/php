<?php

namespace src\Controller;

use src\App\DB;
use src\App\Lib;

class UserController extends MasterController
{
    public function joinPage(){
        $this->render("user/join");
    }

    public function joinProcess(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $pass = $_POST['password'];

        if($id === "" || $name === "" ||$pass === "" ){
            Lib::msgAndBack("입력되지 않은 항목이 있습니다.");
        }
   


        $sql1 = "SELECT * FROM `user` WHERE id = ?";
        $result1 = DB::fetch($sql1, [$id]);

        if($result1){
            Lib::msgAndBack("이미 존재하는 아이디가 있습니다.");
        }

        $sql2 = "INSERT INTO `user`(`id`, `password`, `name`) VALUES (?, ?, ?)";
        $result2 = DB::execute($sql2, [$id, $pass, $name ]);

        if($result2){
            Lib::msgAndGo("회원가입되었습니다.", "/user/login");
        }

    }

    public function loginPage()
    {
        $this->render("user/login");
    }

    public function loginProcess()
    {
        $userId = $_POST['id'];
        $pass = $_POST['password'];

        $user = DB::fetch("SELECT * FROM user WHERE id = ? AND password = ?", [$userId, $pass]);

        if(!$user){
            Lib::msgAndBack("잘못된 로그인 정보입니다");
        }
        //여기까지 통과했다면 정상적으로 로그인된거니까
        $_SESSION['user'] = $user; // 지금 로그인된 유저를 SESSION에다 저장한다.
        Lib::msgAndGo("성공적으로 로그인되었습니다", "/");
    }

    public function logout()
    {
        unset($_SESSION['user']);
        Lib::msgAndGo("로그아웃 되었습니다.", "/");
    }

}
