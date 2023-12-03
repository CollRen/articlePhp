<?php
function index()
{
    require_once(MODEL_DIR . "/article.php");
    $article = articleSelect();
    //print_r($article);
    //die();
    render('/base/index.php', $article);
}
