
Réalisation d’une application web e-commerce, en utilisant HTML, CSS(Bootstrap), Javascript, PHP (Laravel), et MySQL.

Réalisé par :

Mohamed Saidem

Encadré par :

M.EL YOUSFI ABDERRAHMANE

Déploiement du projet

Extraire la base de donnée du dossier base donnee puis créer une base de donnee local nommé asteriskshopping utf8_general_ci
Télécharger composer https://getcomposer.org/download/
Cloner le projet.
Renommer le fichier .env.example à .env (Ouvrez votre console puis cd au répertoire racine du projet executer mv .env.example .env ).
Exécuter composer install.
Exécuter php artisan key:generate .
Exécuter php artisan migrate:fresh .
Exécuter php artisan serve .

plus d'informations :

le projet est sous le lien : http://localhost/eMarket/public/boutique. 
- Le projet est realisé a l'aide des framework laravel et Bootstrap;
- la page de paiement avec le package Stripe;
la page d'admin avec le package Voyageur.

-pour accèder à la page d'admin vous pouvez clicker sur le boutton 'admin' en haut à droite ou tapez le lien 
http://localhost/eMarket/public/admin. 

-l'email de l'admin est: 'me@admin.com', le code d'admin est: 'root', vous pouvez ensuite modifier les tables, les produits ...etc 

dans ce projet vous pouvez faire les choses suivantes:

-voir les produits, afficher des produits, ajouter des produit au panier, afficher le contenu du panier, supprimer les produits du panier,
finaliser la commande en payant avec votre carte (veuillez utilisez le numero de carte valide suivant: 4242 4242 4242 4242),
et voire la page de remerciement apres avoir payé. vous pouvez également modifier les tables et les produits en utilisant la page d'admin
fait avec le package voyageur, toutes les informations sont enregistrées dans une base de données MySql.


- vous avez besoin de l'internet pour pouvoir accèder au projet (car les packages utilisé ont besoin d'une connexion).
