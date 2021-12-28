<?php

use src\App\Route;

Route::get("/", "MainController@index");
Route::get("/board", "BoardController@index");

//get으로 요청하면 해당 페이지를 보여주고 post로 요청하면 회원가입을 처리하는 곳으로 간다
Route::get("/user/register", "UserController@registerPage");
Route::post("/user/register", "UserController@registerProcess");

Route::get("/user/login", "UserController@loginPage");
Route::post("/user/login", "UserController@loginProcess");

if(user())
{
    Route::get("/user/logout", "UserController@logout");
    
    // 글쓰기 페이지와 글쓰기 로직에 대한 라우터
    Route::get("/todo/write", "TodoController@writePage");
    Route::post("/todo/write", "TodoController@writeProcess");
    
    Route::get("/todo/list", "TodoController@listPage");
    Route::get("/todo/view", "TodoController@viewPage");
    
    Route::get("/todo/mod", "TodoController@modPage");
    Route::post("/todo/mod", "TodoController@modProcess");
    Route::get("/todo/del", "TodoController@deleteProcess");


}