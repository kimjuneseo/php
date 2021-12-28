<?php

namespace src\Controller;

class MainController extends MasterController
{
    public function index()
    {
       $this->render("main", ['msg'=>'Hello World']);
    }

}
