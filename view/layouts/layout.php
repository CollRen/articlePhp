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
            <!--<li><a href="index.php?controller=utilisateur">utilisateur</a></li>-->
            <li><a href="index.php?controller=article">article</a></li>
            <li><a href="index.php?controller=article&function=create">Ajouter article</a></li>
            <li><a href="index.php?controller=utilisateur&function=create">Créer votre compte</a></li>
            <li><a href="index.php?controller=login">Connexion</a></li>
        </ul>
    </nav>
    <div class="container">
        <?php if ($content != '') echo $content; ?>
    </div>

</body>

</html>