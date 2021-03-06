<?php
namespace src\Controller;

class User{
    function register(){
        [$userId, $pass, $passc, $username] = post('userId','password','passwordc','username');


        if($userId === '' || $pass == '' || $username == ''){
            back("필수값은 공백이 될 수 없습니다");
        }
 
        if($pass != $passc){
            back("비밀번호와 확인이 다릅니다");
        }

        $result = fetch("SELECT * FROM users WHERE id=?",[$userId]);

        if($result){
            back("이미 해당 아이디로 가입되어 있습니다");
        }

        $sql = "INSERT INTO users (`id`, `name`, `password`, `level`) VALUES (?,?,PASSWORD(?),?)";
        $result = query($sql,[$userId, $username, $pass,1]);

        if(!$result){
            back("DB오류");
        }
        move("/login", "성공적으로 회원가입 되었습니다");
    }

    function login(){
        [$userId, $pass] = post('userId', 'password');
        
        $user = fetch("SELECT * FROM users WHERE id = ? AND password = PASSWORD(?)", [$userId, $pass]);
        
        if(!$user){
            back("잘못된 로그인 정보입니다.");
        }
        $_SESSION['user'] = $user;
       move("/", "성공적으로 로그인 되었습니다.");
    }

    function logout(){
        unset($_SESSION['user']);
        move("/","로그아웃되었습니다.");
    }


}
