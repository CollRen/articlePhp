<form action="index.php?controller=article&function=store" method="post">
    <h1>Créer votre article</h1>
    <label> Titre :
        <input name="titre" type="text" required>
    </label>
    <label> Taper votre texte ici :
        <textarea name="contenu" id="" cols="30" rows="10" required></textarea>
    </label>
    <label> Date de publication :
        <input name="date" type="date" required>
    </label>
    <label> Auteur :
        <!-- Insérer ici l'auteur connecté -->
        <input name="auteur" type="text" readonly value='Auteur connecté '>
    </label>
    <input type="submit" value="Sauvegarder l'article">
</form>