<form action="index.php?controller=utilisateur&function=store" method="post">
    <h1>Créer votre compte</h1>
    <h2>Entrer vos informations</h2>
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> Date de naissance :
        <input name="date_naissance" type="date">
    </label>
    <label> Nom d'utilisateur (Courriel) :
        <input name="nom_utilisateur_mail" type="email">
    </label>
    <label> Mot de passe
        <input name="mot_de_passe" type="text">
    </label>

    </label>
    <input type="submit" value="Save">
</form>