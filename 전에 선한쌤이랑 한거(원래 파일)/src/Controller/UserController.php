<?php

namespace src\Controller;

use src\App\DB;
use src\App\Lib;

class UserController extends MasterController
{
    public function registerPage()
    {
        $this->render("user/register");
    }

    public function registerProcess()
    {
        $userId = $_POST['userid'];
        $pass = $_POST['password'];
        $passc = $_POST['passwordc'];
        $username = $_POST['username'];

        if($userId === "" || $pass === "" || $username === ""){
            // 라이브러리 실행
            Lib::msgAndBack("필수값이 공백입니다.");
        }

        if($pass !== $passc) {
            Lib::msgAndBack("비밀번호와 확인이 다릅니다");
        }
        //SELECT 문을 날려서 지금 현재 입력한 id가 이미 DB에 있는지를 체크하고 있다면 에러메시지를 보여주도록 코드를 추가
        $result = DB::fetch("SELECT * FROM users WHERE id = ?", [$userId]);

        if($result) {
            Lib::msgAndBack("해당아이디로 이미 회원가입되어있습니다");
        }

        $sql = "INSERT INTO users (`id`, `name`, `password`, `level`) VALUES (?, ?, PASSWORD(?), ?)";
        $result = DB::execute($sql, [$userId, $username, $pass, 1]);

        if(!$result){
            Lib::msgAndBack("DB 오류");
        }

        Lib::msgAndGo("성공적으로 회원가입 되었습니다.", "/user/login");

        // http://gondr.asuscomm.com:9090
    }

    public function loginPage()
    {
        $this->render("user/login");
    }
    public function loginProcess()
    {
        //회원로그인 처리하는 로직
        $userId = $_POST['userid'];
        $pass = $_POST['password'];

        $user = DB::fetch("SELECT * FROM users WHERE id = ? AND password = PASSWORD(?)", [$userId, $pass]);

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
        Lib::msgAndGo("로그아웃 되었습니다", "/");

    }
}