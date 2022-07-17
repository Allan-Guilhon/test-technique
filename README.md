## Test technique

Réservé aux administrateurs : une mini-interface d’administration qui permet de gérer une liste de véhicules. Prévoir un formulaire de création et la possibilité de supprimer un véhicule. Prévoir les champs suivants : modèle, marque, puissance, année, finition, description courte, photo principale et prix de vente.

Un mini site one-page (pas de design, utilisez le framework css de votre choix) qui liste les véhicules, avec une système de pagination. Au click sur un véhicule, afficher les informations complètes de celui-ci.

## Installation

L'export de la bdd se trouve dans le dossier data.
Dans le terminal, faire un composer install puis lancer php artisan serve.

## Fonctionnement

On arrive sur la page d'accueil du site avec la liste des véhicules et la pagination pour accéder à une autre page.
Cliquez sur un véhicule pour voir ses spécificités.

Pour aller dans le back office :

- Si vous avez un compte : allez sur Connexion, entrez votre identifiant et mot de passe, puis validez.

- Si vous n'avez pas de compte : allez sur enregistrement, créez votre compte, validez.
Dans le back office, vous arrivez sur liste de voitures, avec la possibilité de revenir sur le site en cliquant sur le logo de voiture en haut en gauche.

Vous accédez à la liste complète des véhicules, avec possibilité de supprimer un véhicule.

Pour rajouter un véhicule :

en haut de la liste des véhicules, cliquez sur ajouter un véhicule, insérez les informations de votre véhicule, téléchargez une image depuis votre ordinateur, validez.

## Temps de travail

install de laravel w/ packagist
Lancement du serveur de dev
test decouverte Laravel
création view page carList
création du controller pour le front + route + test dynamisation simple de la view
création du controller pour le back + route
création de la bdd avec php artisan make:migration create_cars_table
test field avec php artisan migrate en utilisant database 
(env. 5h)

création des views pour le backoffice avec bootstrap (liste de vehicule + page d'ajout de vehicule)
mise en place de l'enregistrement d'un nouveau vehicule dans la bdd (form, message d'erreurs champs vide, enregistrement de l'image, redirection)
suppression d'un vehicule (bouton suppression sur la liste, fonction deleteData dans le controller, route delete).
premier test pour la pagination (dans le controller, avec simplepaginate(5) puis dans la view avec $cars->links()). 
(env. 6h)

affichage des images sur la liste
Installation de Laravel Breeze pour la connexion.
passé en tailwind, refaire toutes les pages du backoffice car le css a été supprimé avec breeze puis utilisation des templates créés par breeze pour les pages carList et carAdd.
création de la single pour afficher un vehicule (css, probléme d'affichage de l'image).
mise en forme des pages du front 
(env. 7h)

mise en place des middleware sur les routes
reprise de bug affichage (image dans la single, css, ) + recherches dans la doc, stackoverflow, tuto...
review du code + commentaires
test (enregistrement de voitures, suppression, affichage) 
(env. 3h)
