<?php
//autoloader.php

function myLoader(string $name)
{
    require_once __ROOT . "/" . str_replace('\\', '/', $name) . ".php";
}

//simple php library
spl_autoload_register("myLoader");
