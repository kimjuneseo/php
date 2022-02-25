<?php

namespace src\Controller;

class View{
    function index(){
        view('index');
    }
    function login(){
        view('auth/login');
    }
    function register(){
        view('auth/register');
    }
    function test($arg){
        authCheck();
        [$path, $idx] = $arg;

        view("test", ["idx" => $idx]);
    }
    
}