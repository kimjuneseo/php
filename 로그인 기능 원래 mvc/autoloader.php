<?php
// autoloader.php

function myLoader(string $name)
{
    require_once __ROOT . "/" . str_replace('\\', '/', $name) . ".php";
}

// PSR-4
//simple php libary
spl_autoload_register("myloader");