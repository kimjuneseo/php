<?php
//index.php
// 파일들을 특정한 이름 규칙에 따라서 저장을 해두소
// php autoloarder 없는 클래스를 사용하여했을 때 위의 규칙에 따라서 파일을 찾아내서 동적으로 리콰이어를 해주도록 하자
date_default_timezone_set("Asia/Seoul");

session_start(); //로그인을 위해서 세션을 만드는 작업

define("__ROOT", dirname(__DIR__) );
require_once (__ROOT . "/autoloader.php");
require_once (__ROOT . "/func.php" );

require_once (__ROOT . "/web.php"); 



src\App\Route::init();  //초기화





