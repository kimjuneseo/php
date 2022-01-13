<?php

namespace src\Controller;

use src\App\DB;
use src\App\Lib;

class UserController extends MasterController
{
    public function registerPage()
    {
        $this ->render("user/register", []);
    }

    public function registerProcess()
    {
        $userId = $_POST['userid'];
        $pass = $_POST['password'];
        $passc = $_POST['passwordc'];
        $username = $_POST['username'];

        if($userId === "" || $pass === "" || $username === "") {
            Lib::msgAndBack("필수값은 공백이 될 수 없습니다.");
        }

        if($pass !==$passc){
            Lib::msgAndBack("비밀번호와 확인이 다릅니다");
        }

        $result = DB::fetch("SELECT * FROM todo WHERE id = ?", [$userId]);

        if($result) {
            Lib::msgAndBack("이미 해당 아이디로 가입되어 있습니다.");
        }

        $sql = "INSERT INTO users (`id`, `name`, `password`, `level`) VALUES (?,?,PASSWORD(?),?)";
        $result = DB::execute($sql, [$userId, $username, $pass, 1]);

        if(!$result){
           Lib::msgAndBack("DB 오류");
        }

        Lib::msgaAndGo("성공적으로 회원가입 되었습니다", "/user/login");
    }

    public function loginPage()
    {
        $this->render("/user/login");
    }

    public function loginProcess()
    {
        $userId = $_POST['userid'];
        $pass = $_POST['password'];
        $user = DB::fetch("SELECT * FROM users WHERE id = ? AND password = ?", [$userId, $pass] );

        if(!$user){
            Lib::msgAndBack("잘못된 로그인 정보입니다.");  
        }

        $_SESSION['user'] = $user;
        Lib::msgAndGo("성공적으로 로그인되었습니다.", "/");
    }
    
    public function logout()
    {
        unset( $_SESSION['user']);
        Lib::msgAndGo("로그아웃 되었습니다", "/");
    }
}

// 영상42:44