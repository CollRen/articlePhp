<?php

/**
 * fonction qui injecte le résultat d'une fonction contenant une requête SQL
 * @var mixed $data résultat d'une fonction contenant une requête SQL
 * @render insert dans $content la page traitant la requête SQL et affiche layout.php
 */
function index()
{
   require_once(SESSION_DIR);
   if (sessionCheck()) {
      require_once(MODEL_DIR . "/article.php");
      $data = articleSelectByAuthor();
      render('/article/index.php', $data);
      exit;
   }
   require_once(MODEL_DIR . "/login.php");
   render('/login/index.php');
}

function create()
{
   require_once(SESSION_DIR);
   if (sessionCheck()) {
      require_once(MODEL_DIR . "/article.php");
      $data = articleSelect();
      render('/article/create.php', $data);
      exit;
   }
   require_once(MODEL_DIR . "/login.php");
   render('/login/index.php');
}

function store($request)
{
   require_once(MODEL_DIR . "/article.php");
   $insert = articleInsert($request);
   $request['id_article'] = $insert;
   render('/article/ajout.php', $request);
}

function view($request)
{
   require_once(MODEL_DIR . "/article.php");
   $article = articleSelectId($request);
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
      exit;
   }
   require_once(MODEL_DIR . "/login.php");
   render('/login/index.php', $request);
}
function deleteArticle($request)
{
   require_once(SESSION_DIR);
   if (sessionCheck()) {
      require_once(MODEL_DIR . "/article.php");
      $request = articleDelete($request);
      render('/article/delete.php', $request);
      exit;
   }
   require_once(MODEL_DIR . "/login.php");
   render('/login/index.php', $request);
}

/*
require_once(SESSION_DIR);
if(sessionCheck()){}else{
    require_once(MODEL_DIR . "/login.php");
    render('/login/index.php', $request);
}*/
