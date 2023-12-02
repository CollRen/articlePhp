<?php

function sessionCheck()
{
    if (!isset($_SESSION['fingerPrint']) ||  $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
        $bool = false;
    } else {
        $bool = true;
    }
    return $bool;
}
