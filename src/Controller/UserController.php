<?php

namespace src\Controller;

class UserController extends MasterController
{
    public function registerPage()
    {
        $this ->render("user/register", []);
    }

    public function resisterProcess()
    {

    }
}