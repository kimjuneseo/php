<?php

use src\App\Route;

Route::get("/", "MainController@index");
Route::get("/board", "BoardController@index");

// get으로 요청하면 해당 페이지를 보여주고 post로 요청하면 회원가입을 처리하는 곳으로 간다
Route::get("/user/register", "UserController@registerPage");
Route::post("/user/register", "UserController@registerProcess");

Route::get("/user/login", "UserController@loginPage");
Route::post("/user/login", "UserController@loginProcess");

if(user())
{
    Route::get("/user/logout", "UserController@logout");
}