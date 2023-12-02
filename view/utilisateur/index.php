<table>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Nom d'utilisateur (courriel)</th>
        <th>Mot de passe</th>
        <th>Modifications</th>
    </tr>
    <?php foreach ($data as $utilisateur) { ?>
        <tr>
            <td><?= $utilisateur['id_utilisateur'] ?></td>
            <td><?= $utilisateur['nom'] ?></td>
            <td><?= $utilisateur['date_naissance'] ?></td>
            <td><?= $utilisateur['nom_utilisateur_mail'] ?></td>
            <td><?= $utilisateur['mot_de_passe'] ?></td>
            <td><a href="index.php?controller=utilisateur&function=view&id_utilisateur=<?= $utilisateur['id_utilisateur'] ?>">Modifier</a></td>
        </tr>
    <?php } ?>
</table>