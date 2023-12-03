<?php

/**
 * Fonction qui va chercher le mdp de l'utilisateur dans la base de donnée.
 * @param array $request Le $_POST du formulaire de login.
 * @return string $result Le mot de passe de la base de données
 */
function utilisateurPswCheck($request)
{

    require_once(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    // 1- check user
    $sql = "SELECT * FROM utilisateur WHERE nom_utilisateur_mail = '$nom_utilisateur_mail'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function regenereIdSession($info_user)
{
    session_regenerate_id();
    $_SESSION['id'] = $info_user[0]['id_utilisateur'];
    $_SESSION['nom'] = $info_user[0]['nom'];
    $_SESSION['auteur'] = $info_user[0]['id_utilisateur'];
    $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
}
