<?php

date_default_timezone_set("Asia/Seoul");

session_start();

define( "__ROOT__", dirname(__DIR__) );

require_once( __ROOT__ . "/autoloader.php" );
require_once( __ROOT__ . "/func.php" );
require_once( __ROOT__ . "/web.php" );

src\App\Route::init();