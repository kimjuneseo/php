<?php
namespace src\Controller;

class User{
    function register(){
        move("/login", "회원가입 성공");
    }

    function registerProcess(){
        $userId = $_POST['userId'];
        $pass = $_POST['password'];
        $passc = $_POST['passwordc'];
        $username = $_POST['username'];

        if($userID ==== '' || $pass === '' || $username === ''){
            back("필수값은 공백이 될 수 없습니다");
        }

        if($pss !== $passc){
            back("비미번호와 확인이 다릅니다");
        }

        $result = fetch("SELECT *FROM user WHERE id=?",[$userId]);

        if($result){
            back("이미 해당 아이디로 가입되어 있습니다");
        }

        $sql = "INSERT INTO users (`id`, `name`, `password`, `level`) VALUES (?,?,PASSWORD(?),?)";
        $result = fetch($sql,[$userId, $username, $pass,1]);

        if(!$result){
            back("DB오류");
        }
    }

    function login(){
        $_SESSION['user'] = ["id" => 1, "name "=> 'test'];

        move("/", "로그인성공");
    }
    function logout(){
        unset($_SESSION['user']);
        move("/","로그아웃되었습니다.");
    }
}
