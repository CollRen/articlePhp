<?php

/**
 * Notes pour la page utilisateurController.php
 * Créer la fonction
 * $data = Créer fonction requête sql
 * render chemin vers la page qui gère $data, puis injecte tout le contenu dans $content vers /layout.php
 * 
 */


/**
 * fonction qui injecte le résultat d'une fonction contenant une requête SQL
 * @var mixed $data résultat d'une fonction contenant une requête SQL
 * @render insert dans $content la page traitant la requête SQL et affiche layout.php
 */
function index()
{
   require_once(MODEL_DIR . "/article.php");
   $data = articleSelect(); // Requête SQL

   render('/article/index.php', $data); // page qui traite la requête sql et mets dans la variable $content
   // render prends ensuite la variable $content et l'affiche dans layout.php
}

function create()
{
   require_once(MODEL_DIR . "/article.php");
   $data = articleSelect();
   render('/article/create.php', $data);
}

function store($request)
{
   //print_r($request);
   require_once(MODEL_DIR . "/article.php");
   $insert = articleInsert($request);
   $request['id_article'] = $insert;
   render('/article/ajout.php', $request);
}

function view($request)
{
   require_once(MODEL_DIR . "/article.php");
   $article = articleSelectId($request);
   //print_r($article); On a l'auteur
   //die();
   render('/article/show.php', $article);
}

/**
 * Fonction à ajuster
 */
function goReadArticle($request)
{
   require_once(MODEL_DIR . "/article.php");
   $article = articleSelectId($request);

   render('/article/read.php', $article);
}


function viewUpdate($request)
{
   require_once(MODEL_DIR . "/article.php");
   $request['id_article'] = articleSelectId($request);
   render('/article/ajout.php', $request);
}
function update($request)
{
   require_once(MODEL_DIR . "/article.php");
   $data = articleEdit($request);
   render('/article/ajout.php', $request);
}


function preUpdate($request)
{

   require_once(SESSION_DIR);
   if (sessionCheck()) {
      require_once(MODEL_DIR . "/article.php");

      render('/article/edit.php', $request);
   } else {
      require_once(MODEL_DIR . "/login.php");

      render('/login/index.php', $request);
   }
}


function deleteArticle($request)
{
   require_once(SESSION_DIR);
   if (sessionCheck()) {
      require_once(MODEL_DIR . "/article.php");
      $request = articleDelete($request);
      render('/article/delete.php', $request);
   } else {
      require_once(MODEL_DIR . "/login.php");
      render('/login/index.php', $request);
   }
}

/*
require_once(SESSION_DIR);
if(sessionCheck()){}else{
    require_once(MODEL_DIR . "/login.php");
    render('/login/index.php', $request);
}*/
