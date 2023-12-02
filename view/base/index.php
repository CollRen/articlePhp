<h2>Bienvenu sur le Forum de Collège Maisonneuve!</h2>

<table>
    <tr>
        <th>Auteur</th>
        <th>Numéro de l'article</th>
        <th>Titre</th>
        <th>Lire l'article</th>
    </tr>
    <?php foreach ($data as $row) {
    ?>
        <tr>
            <td><?= $row['nom'] ?></td>
            <td><?= $row['id_article'] ?></td>
            <td><?= $row['titre'] ?></td>

            <td><a href="index.php?controller=article&function=goReadArticle&id_article=<?= $row['id_article'] ?>">Lire l'article</a></td>
        </tr>
    <?php } ?>
</table>