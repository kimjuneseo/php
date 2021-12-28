<?php
//파일들을 특정한 이름 규칙에 따라서 저장을 해두고
// 없는 클래스를 사용하려했을 때 위의 규칙에 따라서 파일을 찾아내서 동적으로 리콰이어를 해주도록 만들자.
// php autoloader

//모든 요청을 전부 index.php로 돌리는 작업을 했어.

date_default_timezone_set("Asia/Seoul");

session_start(); // 로그인을 위해서 세션을 만드는 작업

define("__ROOT", dirname(__DIR__) ); //c:\xampp\htdocs

require_once ( __ROOT . "/autoloader.php");
require_once ( __ROOT . "/func.php");
require_once ( __ROOT . "/web.php");


src\App\Route::init(); //초기화

//src\App\Route::


//echo $_SERVER["REQUEST_URI"];

// http://gondr.asuscomm.com:9090