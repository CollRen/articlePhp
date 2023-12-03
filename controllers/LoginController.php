<?php

function loginCheck()
{
    if (!sessionCheck()) {
        return false;
    } else {
        return true;
    }
}

/**
 * Fonction qui envoie à la view utilisateur/login
 * 
 */
function index()
{
    render('/login/index.php');
}

function store($request)
{
    //print_r($request);
    require_once(MODEL_DIR . "/utilisateur.php");
    $insert = utilisateurInsert($request);
    echo $insert;
}
function auth()
{

    require_once(MODEL_DIR . "/login.php");
    $mot_de_passe = $_POST["mot_de_passe"];
    $info_user = utilisateurPswCheck($_POST);
    $salt = "H@%h14";
    $saltPassword = $mot_de_passe . $salt;
    $mot_de_passe = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost' => 10]);
    if (password_verify($saltPassword, $info_user[0]['mot_de_passe'])) {

        session_regenerate_id();
        $_SESSION['id'] = $info_user[0]['id_utilisateur'];
        $_SESSION['nom'] = $info_user[0]['nom'];
        $_SESSION['auteur'] = $info_user[0]['id_utilisateur'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

        require_once(MODEL_DIR . "/article.php");
        $article = articleSelect();
        render('/base/index.php', $article);
    } else {

        require_once(MODEL_DIR . "/login.php");
        header('location:login.php?msg=2');
    }
}

function logout()
{
    session_start();
    session_destroy();

    header('location:index.php');
}
