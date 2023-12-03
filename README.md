# Énoncé

La page d'accueil répertorie tous les articles doit être accessible à tous, même non connecté

- nom de l'auteur
- date

## Critères à respecter

- L'utilisateur peut, pour les articles dont il est l'auteur
  1- Rédiger
  2- Modifier ou le supprimer

## Pages à créer

- Page de connexion
- Page d'accueil

### Cues

- Session start dans index.php
- Session chech dans le controleur

Puis par exemple: dans le formulaire fontion forumCreate (

1st: check session)

::FAIT::sessionCheck à Créer dans la librairie

#### Ajustements

- Le btn Modifier de la page article apparait seulement si l'utilisateur est connecté
- remmettre la page pour créer un nouvel utilisateur, c'est demandé...
- Page ajouter un article doit savoir qui est connecté afin de bien l'ajouter dans la BD
- Ajouter un select à la page de modification d'article (Seulement les article dont il est l'auteur)

- Vérifier s'il est possible de crypter en 25 caractères
- Changer le SQL en conséquence: 65 ou 25 VARCHAR

- Publié sur GitHub publique

- Envoyer l'utilisateur fraichement créer vers la page de création d'article

Lister ce que je veux que le site fasse

- Lien déconnexion
