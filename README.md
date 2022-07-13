## Test technique

- Réservé aux administrateurs : une mini-interface d’administration qui permet de gérer une liste de véhicules. Prévoir un formulaire de création et la possibilité de supprimer un véhicule. Prévoir les champs suivants : modèle, marque, puissance, année, finition, description courte, photo principale et prix de vente.

- Un mini site one-page (pas de design, utilisez le framework css de votre choix) qui liste les véhicules, avec une système de pagination. Au click sur un véhicule, afficher les informations complètes de celui-ci.

## Temps de travail 

mercredi 9h -> 12h
- install de laravel w/ packagist
- Lancement du serveur de dev
- test decouverte Laravel
- création view page carList
- création du controller pour le front + route + test dynamisation simple de la view
- création du controller pour le back + route 
- création de la bdd avec `php artisan make:migration create_cars_table`
- test field avec `php artisan migrate` en utilisant database

problémes rencontrer : recherche sur l'utilisation de vite mais comme je ne suis pas en php 8 et que je ne peux pas upgrate 
pour des raisons de compatibilité avec mes autres projets je vais essayer de travailler avec mix.

recherches : instal de laravel, crud pour les controllers, bdd avec artisan et les differents formats d'enregistrements (string, int...)

format column types : https://laravel.com/docs/9.x/migrations
