# Énoncé

La page d'accueil répertorie tous les articles doit être accessible à tous, même non connecté

-   nom de l'auteur
-   date

## Critères à respecter

-   L'utilisateur peut, pour les articles dont il est l'auteur
    1- Rédiger
    2- Modifier ou le supprimer

## Pages à créer

-   Page de connexion
-   Page d'accueil

### Cues

-   Session start dans index.php
-   Session chech dans le controleur

Puis par exemple: dans le formulaire fontion forumCreate (

1st: check session)

::FAIT::sessionCheck à Créer dans la librairie

#### Ajustements

-   Ajouter un select à la page de modification d'article (Seulement les article dont il est l'auteur)

-   Envoyer l'utilisateur fraichement créer vers la page de création d'article

Lister ce que je veux que le site fasse

#### Layouts.php

-   Faire une loop pour créer le menu selon l'état de la connexion

#### Créer votre article

-   Date de publication se fera tout seul: today()PHP
-   Enlever le champ auteur de la vue.
-   Publier l'article au lieu de sauvegarder l'article
-   Enlever l'id de l'auteur dans la liste des articles disponibles
-   Change le h1 pour Vos articles
-   Si l'auteur n'a pas d'article: 'Vous n'avez pas encore d'article'
