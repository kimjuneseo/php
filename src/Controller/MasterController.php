<?php

namespace src\Controller;

class MasterController
{
    public function render($page, $data)
    {
        extract($data); 
        // echo __ROOT;
        require_once(__ROOT . "/views/" . $page . ".php"); 
    }

}