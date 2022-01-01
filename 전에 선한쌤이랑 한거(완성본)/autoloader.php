<?php

function myLoder(string $name){
    require_once __ROOT__ . "/" . str_replace("\\", "/", $name) . ".php";
};

spl_autoload_register("myLoder");


// <?php
// //autoloader.php

// function myLoader(string $name)
// {
//     require_once __ROOT . "/" . str_replace('\\', '/', $name) . ".php";
// }

// //simple php library
// spl_autoload_register("myLoader");