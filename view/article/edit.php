<form action="index.php?controller=article&function=update&id_article=<?= $data['id_article'] ?>" method="post">

    <label>Titre
        <input name="titre" type="text" value='<?= $data['titre']; ?>'>
    </label>
    <label for="contenu">Contenu
        <textarea name="contenu" id="" cols="30" rows="10"><?= $data['contenu']; ?></textarea>
    </label>
    <input name="auteur" type="hidden" value='<?= $data['auteur']; ?>'>

    <label for="date">Date de la publication originale:
        <input name="date" type="date" value='<?= $data['date']; ?>' readonly>
    </label>

    <!--<input name="auteur" type="hidden" value=' //$data['auteur']; '-->

    <input type="submit" value="Save">
</form>