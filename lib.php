<?php

spl_autoload_register(function ($f){
    $f = str_replace("\\", '/', $f);

    require_once("../{$f}.php");
});

function e($t){
    echo "<pre>$t</pre>";
}

function ss(){
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

function script($s){
    echo "<script>$s</script>";
}

function alert($t = ""){
    // 비어있지 않으면
    !empty($t) && script("alert('$t');");
}

function move($tg, $t = ''){
    alert($t);
    script("location.replace('$tg')");
    exit;
}

function back($t = ''){
    alert($t);
    script("history.back();");
    exit;
}

function authCheck(){
    if(!ss()){
        move('/login', '로그인 후 이용해 주세요.');
    }
}

function view($flieName, $d = []){
    extract($d);
    require "src/View/header.php";
    require "src/View/$flieName.php";
    require "src/View/footer.php";
}
