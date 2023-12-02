<?php


/**
 * Foncion qui sort toutes les données de la table 'article' par titres ordonnées par odre alphabétique
 * @return mysqli_fetch_array dans la variable $result, un tableau associatif du résultat de la requête
 */
function articleSelect()
{
    require(CONNEX_DIR);
    $sql = "SELECT * FROM article inner join utilisateur on id_utilisateur = auteur  ORDER BY titre";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

/**
 * Foncion qui ajoute les données d'un nouvel article (titre, auteur, date) dans la base de donnée
 * @param array $request Contient les données de $_REQUEST
 * @return mysqli_insert_id ou un message d'erreur si toutfois ça ne fonctionne pas
 */
function articleInsert($request)
{

    require(CONNEX_DIR);

    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO article (titre, contenu, date, auteur) VALUES ('$titre', '$contenu', '$date', 1)";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

/**
 * Foncion qui sort toutes les données de la table 'article' d'un id
 * @param array $request Contient les données de $_REQUEST
 * @return mysqli_fetch_array dans la variable $result, un tableau associatif du résultat de la requête
 */
function articleSelectId($request)
{
    require(CONNEX_DIR);
    $id_article = mysqli_real_escape_string($connex, $request['id_article']);
    $sql = "SELECT * FROM article WHERE id_article = '$id_article'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //echo $result;
    return $result;
}

/**
 * Foncion qui met à jour le titre de l'article à la demande de son auteur.
 * La date et l'id sont des données qui ne doivent pas pouvoir être changées
 * @param array $request Contient les données de $_REQUEST
 * @return mysqli_insert_id ou un message d'erreur si toutfois ça ne fonctionne pas
 */
function articleEdit($request)
{
    require_once(SESSION_DIR);
    sessionCheck();

    require(CONNEX_DIR);


    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }


    $sql = "UPDATE article SET titre = '$titre', contenu = '$contenu', date = '$date' WHERE id_article = '$id_article'";


    if (mysqli_query($connex, $sql)) {

        return true;
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

/**
 * Foncion qui efface l'article à la demande de son auteur.
 * @param array $request Contient les données de $_REQUEST
 * @return mysqli_insert_id ou un message d'erreur si toutfois ça ne fonctionne pas
 */
function articleDelete($request)
{
    //print_r($request);
    print_r($_REQUEST);
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "DELETE FROM article WHERE id_article = '$id_article'";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
