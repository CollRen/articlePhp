<p> <strong>Titre de l'article : </strong><?= $data['titre']; ?></p>
<p> <strong>Contenu : </strong><?= $data['contenu']; ?></p>
<p> <strong>numéro d'identifiant de l'article : </strong><?= $data['id_article']; ?></p>
<!--<a href="index.php?controller=article&function=viewUpdate" class="btn">Modifier</a> -->
<form action="index.php?controller=article&function=preUpdate" method="post">
    <input type="hidden" name="id_article" value="<?= $data['id_article']; ?>">
    <input type="hidden" name="titre" value="<?= $data['titre']; ?>">
    <input type="hidden" name="date" value="<?= $data['date']; ?>">
    <input type="hidden" name="auteur" value="<?= $data['auteur']; ?>">
    <input type="hidden" name="contenu" value="<?= $data['contenu']; ?>">
    <input type="submit" class="btn" value="Modifier">

</form>
<form action="index.php?controller=article&function=deleteArticle" method="post">
    <input type="hidden" name="date" value="<?= $data['date']; ?>">
    <input type="hidden" name="contenu" value="<?= $data['contenu']; ?>">
    <input type="hidden" name="date" value="<?= $data['date']; ?>">
    <input type="hidden" name="titre" value="<?= $data['titre']; ?>">
    <input type="hidden" name="auteur" value="<?= $data['auteur']; ?>">
    <input type="hidden" name="id_article" value="<?= $data['id_article']; ?>">
    <input type="submit" class="btn-danger" value="Effacer">
</form>
</form>