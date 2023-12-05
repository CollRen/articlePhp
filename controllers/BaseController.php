<?php
function index($article = NULL)
{
    //print_r($article);
    require_once(MODEL_DIR . "/article.php");
    $article = articleSelect();
    //die();
    render('/base/index.php', $article);
}
