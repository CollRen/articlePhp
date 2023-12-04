<?php

/**
 * fonction qui injecte le résultat d'une fonction contenant une requête SQL
 * @var mixed $data résultat d'une fonction contenant une requête SQL
 * @render insert dans $content la page traitant la requête SQL et affiche layout.php
 */
function index()
{
   require_once(MODEL_DIR . "/utilisateur.php");
   $data = utilisateurSelect();
   render('/utilisateur/index.php', $data);
}

function create()
{
   require_once(MODEL_DIR . "/article.php");
   $data = articleSelect();
   render('/utilisateur/create.php', $data);
}

function store($request)
{
   require_once(MODEL_DIR . "/utilisateur.php");
   $request['id_utilisateur'] = utilisateurInsert($request);
   render('/utilisateur/show.php', $request);
}

function view($request)
{
   require_once(MODEL_DIR . "/utilisateur.php");
   $utilisateur = utilisateurSelectId($request);
   render('/utilisateur/show.php', $utilisateur);
}
