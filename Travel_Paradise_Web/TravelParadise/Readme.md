# Travel Paradise - Connexion à la base de données

👋 Hello l’équipe,

Pour ce projet, on a finalement opté pour une solution **locale** et plus **maîtrisable** en équipe : **Docker Compose**.  
Pourquoi ce choix ? Parce que ça permet à tout le monde d’avoir la **même base de données PostgreSQL** configurée automatiquement, sans dépendre d’un service externe.


Etapes à suivre
1. Cloner le projet
2. Créer un fichier .env.local
Dans le dossier du projet, créez un fichier .env

Ajoutez cette ligne à l’intérieur :DATABASE_URL="postgresql://postgres:@db.wdhzdvakxejqavffxhxg.supabase.co:5432/postgres?serverVersion=16&charset=utf8"

Je vous donnerai le mot de passe (TON_MOT_DE_PASSE) en privé. Sans ce mot de passe, Symfony ne pourra pas se connecter à la base.

3. Installer les dépendances

Outil	                        Description
PHP (8.2+)	                    Langage utilisé par Symfony
Composer	                    Gestionnaire de dépendances PHP
Symfony CLI	                    Pour créer et gérer les projets Symfony
PostgreSQL (client local)	    Pour exécuter manuellement des requêtes si nécessaire
pgAdmin (facultatif)	        Interface graphique pour PostgreSQL

Commande à exécuter dans le projet Symfony :
composer install
composer require symfony/orm-pack
composer require doctrine/doctrine-migrations-bundle
composer require symfony/maker-bundle --dev

4. Exécuter les migrations (structure de la base)

php bin/console doctrine:migrations:migrate
Cette commande crée les tables dans la base Supabase. Vous pouvez dire yes quand il demande confirmation.

5. Lancer le serveur local Symfony
symfony server:start
Tu pourras ensuite accéder à l’application sur :
👉 http://localhost:8000