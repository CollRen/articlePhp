<form action="index.php?controller=utilisateur&function=update" method="post">
    <label> Nom :
        <input name="nom" type="text" value='<?= $data['nom']; ?>'>
    </label>
    <label> Date de naissance :
        <input name="date_naissance" type="date" value='<?= $data['date_naissance']; ?>'>
    </label>
    <label> Nom d'utilisateur (courriel) :
        <input name="nom_utilisateur_mail" type="email" value='<?= $data['nom_utilisateur_mail']; ?>'>
    </label>
    <label> Mot de passe :
        <input name="mot_de_passe" type="text">
    </label>
    <input name="id_utilisateur" type="hidden" value='<?= $data['id_utilisateur']; ?>'>
    <?php ?>
    </select>
    </label>
    <input type="submit" value="Save">
</form>