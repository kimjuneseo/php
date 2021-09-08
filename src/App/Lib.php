<?php

namespace src\App;

class Lib
{
    public static function msgAndGo($msg, $url)
    {
        echo "<script>";
        echo "alert('$msg');";
        echo "location.href='{$url}';";
        echo "</script>";
        exit;
    }

    public static function msgAndBack($msg)
    {
        echo "<script>";
        echo "alert('$msg');";
        echo "history.back();";
        echo "</script>";
        exit;
    }
    
    public static function msgAndBoolen($msg, $url){
        $Confirm = "<script> let deleteConfirm   = confirm('$msg'); </script>";
        print $Confirm;
        echo "<script>  deleteConfirm ? location.href='{$url}' : history.back(); </script>";

    }
}
