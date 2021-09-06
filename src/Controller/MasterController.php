<?php

namespace src\Controller;

Class MasterController
{
    public function render($page, $data=[])
    {
        extract($data);
        require_once ( __ROOT__.  "/src/views/header.php" );
        require_once ( __ROOT__.  "/src/views/". $page . ".php" );
        require_once ( __ROOT__.  "/src/views/footer.php" );
        // require_once ( "/views/header.php" );
        // require_once ( "/views/". $page . ".php" );
        // require_once ( "/views/footer.php" );
    }
}