<?php

// function index()
// {
//     //require_once (VIEW_DIR."/base/welcome.php");

//     render('/base/welcome.php');
// }


function index()
{
    require_once(MODEL_DIR . "/article.php");
    $article = articleSelect();
    //print_r($article);
    //die();
    render('/base/index.php', $article);
}

// function edit($request)
// {
//     require_once(MODEL_DIR . "/client.php");
//     $client = clientSelectId($request);
//     require_once(MODEL_DIR . "/ville.php");
//     $ville = villeSelect();
//     $client = array('client' => $client);
//     $ville = array('ville' => $ville);
//     // print_r($client);
//     // echo "<br>";
//     // print_r($ville);

//     $data = array_merge($ville, $client);
//     // echo "<br>";
//     //print_r($data);

//     //die();

//     ///print_r($client);
//     render('/client/edit.php', $data);
// }
