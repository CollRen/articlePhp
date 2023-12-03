<?php

/**
 * fonction qui injecte le résultat d'une fonction contenant une requête SQL
 * @var mixed $data résultat d'une fonction contenant une requête SQL
 * @render insert dans $content la page traitant la requête SQL et affiche layout.php
 */
function index()
{
   require_once(MODEL_DIR . "/utilisateur.php");
   $data = utilisateurSelect(); // Requête SQL
   // print_r($data);
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
   //print_r($request);
   $utilisateur = utilisateurSelectId($request);
   //print_r($utilisateur);
   render('/utilisateur/show.php', $utilisateur);
}

function viewArticle($request)
{
   //var_dump($_REQUEST);
   //print_r($request);
   require_once(MODEL_DIR . "/article.php");
   //print_r($request);
   $article = articleSelect($request);
   //print_r($utilisateur);
   render('/article/show.php', $article);
}
function viewUpdate($request) // Ça marche pas ici: pas de menu, etc.
{
   //var_dump($_REQUEST);
   //print_r($request);
   require_once(MODEL_DIR . "/utilisateur.php");
   //require_once(VIEW_DIR . "/utilisateur/edit.php");
   //print_r($request);
   $utilisateur = utilisateurSelectId($request);
   //print_r($utilisateur);
   //render('/utilisateur/edit.php', $utilisateur);
}
function update($request)
{
   //var_dump($_REQUEST);
   require_once(MODEL_DIR . "/utilisateur.php");
   $utilisateurEdit = utilisateurEdit($request);
   //print_r($utilisateurEdit);
   echo $utilisateurEdit;
}

function test($request)
{

   require_once(MODEL_DIR . "/article.php");
   $dataArticle = articleSelect();
   require_once(MODEL_DIR . "/utilisateur.php");
   $data = utilisateurSelectId($request);
   render('/utilisateur/edit.php', $data);
   //return $dataarticle;
}


//require vs require_once
function edit($request)
{
   require_once(MODEL_DIR . "/utilisateur.php");
   //print_r($request);
   $utilisateur = utilisateurSelectId($request);
   //require_once(MODEL_DIR . "/article.php");
   //Ajouter la requête sql
   render('/utilisateur/edit.php', $utilisateur);
}
