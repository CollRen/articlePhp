<?php $today = date("Y-m-d");  ?>
<h1>Publier votre article en date d'aujourd'hui</h1>
<form action="index.php?controller=article&function=store" method="post">

    <label> Titre :
        <input name="titre" type="text" required>
    </label>
    <label> Taper votre texte ici :
        <textarea name="contenu" id="" cols="30" rows="10" required></textarea>
    </label>
    <input name="date" type="hidden" value="<?php echo $today ?>">
    <input name="auteur" type="hidden" readonly value=<?php echo $_SESSION['auteur']; ?>>

    <input type="submit" value="Publier l'article">
</form>