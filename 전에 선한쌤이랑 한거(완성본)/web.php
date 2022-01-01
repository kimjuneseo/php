<?php

namespace src\App;

use src\App\Route;

Route::get("/", "MainController@index");

Route::get("/user/register", "UserController@joinPage");
Route::post("/user/register", "UserController@joinProcess");

Route::get("/user/login", "UserController@loginPage");
Route::post("/user/login", "UserController@loginProcess");
Route::get("/user/logout", "UserController@logout");


Route::get("/todo/list", "TodoController@listPage");

Route::get("/todo/write", "TodoController@writePage");
Route::post("/todo/write", "TodoController@writeProcess");


Route::get("/todo/read", "TodoController@readPage");

Route::get("/todo/mod", "TodoController@modPage");
Route::post("/todo/mod", "TodoController@modProcess");

Route::get("/todo/del", "TodoController@delProcess");
