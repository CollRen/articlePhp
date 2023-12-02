<?php


function utilisateurSelect()
{
    require(CONNEX_DIR); // require_once a été retiré pour la function index.php de BaseController
    $sql = "SELECT * FROM utilisateur ORDER BY nom";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function utilisateurInsert($request)
{
    //var_dump($request);

    require_once(CONNEX_DIR);

    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $salt = "H@%h14";
    $saltPassword = $mot_de_passe . $salt;

    $mot_de_passe = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost' => 10]);




    $sql = "INSERT INTO utilisateur (nom, nom_utilisateur_mail, date_naissance, mot_de_passe) VALUES ('$nom', '$nom_utilisateur_mail', '$date_naissance', '$mot_de_passe')";


    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function utilisateurSelectId($request)
{
    require_once(CONNEX_DIR);

    $id_utilisateur = mysqli_real_escape_string($connex, $request['id_utilisateur']);
    $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = '$id_utilisateur'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}
function utilisateurEdit($request)
{

    require_once(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE utilisateur SET nom = '$nom', date_naissance = '$date_naissance' WHERE id_utilisateur = '$id_utilisateur'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}
