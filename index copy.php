<?php
define('MODEL_DIR', 'models');
define('VIEW_DIR', 'view');

$config = array(
    'default_controller' => 'base',
    'default_function' => 'index'
);

function safe($params){
    return addslashes($params);
}

function render($file, $data = null){
    $layout_file = 'view/layouts/layout.php';

    $content ='  <form action="">
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> Adresse :
        <input name="adresse" type="text">
    </label>
    <label> Phone :
        <input name="phone" type="text">
    </label>
    <label> Courriel :
        <input name="courriel" type="email">
    </label>
    <label> Naissance :
        <input name="date_naissance" type="date">
    </label>
    <input type="submit" value="Save">
</form>';

'
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?controller=client">Client</a></li>
            <li><a href="index.php?controller=client&function=create">Ajouter Client</a></li>
        </ul>
    </nav>
    <div class="container">
    <form action="">
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> Adresse :
        <input name="adresse" type="text">
    </label>
    <label> Phone :
        <input name="phone" type="text">
    </label>
    <label> Courriel :
        <input name="courriel" type="email">
    </label>
    <label> Naissance :
        <input name="date_naissance" type="date">
    </label>
    <input type="submit" value="Save">
</form>
    </div>

</body>
</html>
}
';
$controller = isset($_REQUEST['controller']) ? safe($_REQUEST['controller']) : $config['default_controller'];
$function = isset($_REQUEST['function']) ? safe($_REQUEST['function']) : $config['default_function'];


 //echo " le controlleur $controller<br>";
// echo " la fonction $function";

$controller_file = "controllers/".ucfirst($controller)."Controller.php";

//echo $controller_file;

if(!file_exists($controller_file)){
    trigger_error('Invalid controller');
    echo 'Invalid controller '.$controller;
    exit;
}
//echo 'on est la....:)';

function index(){
    echo "<h1>Form</h1>";
 }
 
    function create(){
        render('/client/create.php');
 }

$controller_function = strtolower($function);
if(!function_exists($controller_function)){
    trigger_error('Invalid function');
    echo 'Invalid function '.$function;
    exit;
}

//call_user_func($function, $_REQUEST);

create();
?>


