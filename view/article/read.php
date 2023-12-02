<p> <strong>Titre de l'article : </strong><?= $data['titre']; ?></p>
<p> <strong>numéro d'identifiant de l'article : </strong><?= $data['id_article']; ?></p>

<article>
    <p><?= $data['contenu']; ?></p>
</article>

<a class="btn" href="index.php?controller=base">Retour aux articles</a>