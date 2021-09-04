<?php

function user()
{
    if(isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }else {
        return false;
    }
}

function todo()
{
    if(isset($_SESSION['todo'])) {
        return $_SESSION['todo'];
    }else {
        return false;
    }
}