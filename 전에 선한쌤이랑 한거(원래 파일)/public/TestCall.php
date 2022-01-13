<?php


// 연관배열이라고도 하고, 키배열 => Associative array
$arr = ['aaa' => 10, 'bbb'=>20, 'ccc'=>30];

$aaa = 50;
echo $aaa;
extract($arr);


echo $aaa;