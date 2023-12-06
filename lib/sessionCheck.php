<?php

function sessionCheck()
{
    if (!isset($_SESSION['fingerPrint']) ||  $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
        return false;
    }
    return true;
}

/*
function regenereIdSession($info_user)
{
    session_regenerate_id();
    $_SESSION['id'] = $info_user[0]['id_utilisateur'];
    $_SESSION['nom'] = $info_user[0]['nom'];
    $_SESSION['auteur'] = $info_user[0]['id_utilisateur'];
    $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
}
*/
