
Ce project a été realisé evec PHP Symfony 5.4 et composer 2.1
Rassurez vous qu'en plus de ces deux éléments, vous avez un Système de Gestion de Base de Données (SGBD).

Pour tester le projet, exécuter les commande suivantes dans votre terminal:

1. $ git clone https://github.com/Keen1483/Delivery-date-and-Payement-date.git

2. Ouvrez le le project dans votre éditeur de code

3. Modifié le fichier .env qui est à la racine du projet.
    # DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/delivery_time?serverVersion=5.7"
    # DATABASE_URL="db_user:db_password@127.0.0.1:5432/delivery_time?serverVersion=13&charset=utf8"
Décommentez l'une de ces deux en fonction de votre SGBD (MySQL ou PostgreSQL)
Remplacez db_user et db_password par les identifiant de votre SGBD

4. $ php bin/console doctrine:database:create

5. $ php bin/console doctrine:migrations:migrate

6. $ php bin/console server:run

7. Ouvrez votre navigateur à l'adresse: http://127.0.0.1:8000

DONGMO BERNARD GERAUD




