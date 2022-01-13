<?php

namespace src\Controller;


class MasterController
{
    public function render($page, $data = [])
    {
        extract($data); //나중에 설명할께

        require_once (__ROOT . "/views/template/header.php");
        require_once (__ROOT . "/views/" . $page . ".php");
        require_once (__ROOT . "/views/template/footer.php");
    }
}