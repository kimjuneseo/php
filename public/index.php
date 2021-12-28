<?php
//index.php
// 파일들을 특정한 이름 규칙에 따라서 저장을 해두소
// php autoloarder 없는 클래스를 사용하여했을 때 위의 규칙에 따라서 파일을 찾아내서 동적으로 리콰이어를 해주도록 하자
define("__ROOT", dirname(__DIR__) );
require_once (__ROOT . "/autoloader.php");
echo $_SERVER["REQUEST_URI"];


// $a = new src\Student("김준서", ["프로그래밍", "게임"], 10);

// echo "<pre>";
// var_dump($a);
// echo "</pre>";




// include ("Human.php"); 

// include 에러가 발생하면 무시하고 진행


// $h1  = new Human("김준서", ["첫번째", "두번째"]);
// $h2  = new Human("서울디지텍", ["첫번째", "두번째"]);

// $h3 = clone($h2);
// $h3->setName("변형된서울디지텍");

// // php 무슨일이 있어도 구버전의 코드를 지원 //print_r var_dump
// echo "<pre>";
// var_dump($h1);
// var_dump($h2);
// var_dump($h3);
// echo "</pre>";