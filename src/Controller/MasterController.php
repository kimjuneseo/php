<?php

namespace src\Controller;

class MasterController
{
    public function render($page, $data = [])
    {
        // 연관배열의 키로 변수를 만들어줘서 배열의 값을 편하게 사용할 수 있다
        extract($data); 
        // echo __ROOT;

        require_once(__ROOT . "/views/template/header.php");
        require_once(__ROOT . "/views/" . $page . ".php"); 
        require_once(__ROOT . "/views/template/footer.php");
    }

}
