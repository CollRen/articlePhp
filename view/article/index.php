<h1>Liste des articles disponibles</h1>
<table>
    <tr>
        <th>id</th>
        <th>Titre l'article</th>
        <th>auteur</th>
        <th>Show</th>
    </tr>
    <?php

    foreach ($data as $article) { ?>
        <tr>
            <td><?= $article['id_article'] ?></td>
            <td><?= $article['titre'] ?></td>
            <td><?= $article['auteur'] ?></td>

            <td><a href="index.php?controller=article&function=view&id_article=<?= $article['id_article'] ?>">Modifier</a></td>
        </tr>
    <?php } ?>
</table>