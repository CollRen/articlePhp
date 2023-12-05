<?php



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
    require(MODEL_DIR . "/login.php");
    $mot_de_passe = $_POST["mot_de_passe"];
    $info_user = utilisateurPswCheck($_POST);
    // $salt = "H@%h14";
    // $saltPassword = $mot_de_passe . $salt;
    require_once('lib/core.php');
    $saltPassword = salt($mot_de_passe);

    $mot_de_passe = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost' => 10]);
    if (password_verify($saltPassword, $info_user[0]['mot_de_passe'])) {

        regenereIdSession($info_user);

        require_once(MODEL_DIR . "/article.php");
        $article = articleSelect();
        render('/base/index.php', $article);
    } else {
        header('location:login.php?msg=2');
    }
}

function logout()
{
    session_start();
    session_destroy();

    header('location:index.php');
}
