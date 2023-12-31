<?php

function safe($params)
{
    return addslashes($params);
}
/**
 * @description Ajoute -layout.php -contenu à $content
 * @var mixed $file path to file
 * @var mixed $date données recueuillis à partir de la page MODEL_DIR. '/[...].php'
 * @var mixed $content le contenu obtenu de VIEW_DIR.$file
 */
function render($file, $data = null)
{
    $layout_file = VIEW_DIR . '/layouts/layout.php';
    ob_start();
    include_once(VIEW_DIR . $file);
    $content = ob_get_clean();
    include_once($layout_file);
}


function infNoRenderAffMenu()
{
    $layout_file = VIEW_DIR . '/layouts/layout.php';
    include_once($layout_file);
}

function salt($sale)
{
    $salt = "H@%h14";
    $sale = $sale . $salt;
    return $sale;
}

/*
require_once(SESSION_DIR);
if (!sessionCheck()) {
    echo "disconnected";
    $layoutUrl = '/layouts/layout.php';
} else {
    echo "Connected";
    $layoutUrl = '/layouts/layoutin.php';
}

$layout_file = VIEW_DIR . $layoutUrl;
*/
