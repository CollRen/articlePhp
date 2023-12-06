<?php
function index($article = NULL)
{
    require_once(MODEL_DIR . "/article.php");
    $article = articleSelect();
    render('/base/index.php', $article);
}
