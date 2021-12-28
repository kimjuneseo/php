<?php

use src\App\Route;

Route::get("/", "MainController@index");
Route::get("/board", "BoardController@index");