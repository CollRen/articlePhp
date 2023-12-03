<p> <strong>id : </strong><?= $data['id_utilisateur']; ?></p>
<p> <strong>Nom : </strong><?= $data['nom']; ?></p>
<p> <strong>Date de naissance : </strong><?= $data['date_naissance']; ?></p>
<p> <strong>Nom d'utilisateur (courriel) : </strong><?= $data['nom_utilisateur_mail']; ?></p>
<a href="index.php?controller=utilisateur&function=edit&id_utilisateur=<?= $data['id_utilisateur']; ?>" class="btn">Modifier</a>
<form action="" method="post">
    <input type="hidden" name="id_utilisateur" value="<?= $data['id_utilisateur']; ?>">
    <input type="submit" class="btn-danger" value="Effacer">
</form>