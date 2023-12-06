<?php

$msg = null;
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $msg = "Vérifier le mot de passe ou le nom d'utilisateur";
    } else {
        $msg = "Ce message n'apparaitra pas";
    }
}
$title = 'Login';

?>

<div class="container">
    <form action="index.php?controller=login&function=auth" method="post">
        <h3>Se connecter ou <a href="index.php?controller=utilisateur&function=create">créer un compte</a></h3>
        <span class="text-danger"><?= $msg; ?></span>
        <label> Username :
            <input name="nom_utilisateur_mail" type="email">
        </label>
        <label> Mot de passe :
            <input name="mot_de_passe" type="password">
        </label>
        <input type="hidden" name="page" value=<?php $article ?>>
        <input type="submit" value="Save">
    </form>
</div>

</body>

</html>