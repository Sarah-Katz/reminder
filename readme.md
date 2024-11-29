# Gestionnaire de Rappels

## Description

Ce projet est une application web de gestion de rappels développée avec Symfony. Elle permet aux utilisateurs de créer, organiser et suivre des rappels classés par catégories.

## Fonctionnalités

- Création, modification et suppression de catégories
- Création, modification et suppression de rappels
- Association de rappels à des catégories
- Marquage des rappels comme terminés
- Interface utilisateur intuitive et responsive

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL ou MariaDB

## Installation

1. Clonez le dépôt :

    ```bash
    git clone https://github.com/Sarah-Katz/reminder
    cd reminder
    ```

2. Installez les dépendances :

    ```bash
   composer install
    ```

3. Configurez votre base de données dans le fichier .env :

    ```bash
   DATABASE_URL="mysql://user:password@127.0.0.1:3306/reminder_db?serverVersion=8.0"
    ```

4. Créez la base de données et exécutez les migrations :

    ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
    ```

5. Lancez le serveur de développement :

    ```bash
   symfony server:start
    ```

## Utilisation

Accédez à l'application via votre navigateur à l'adresse http://localhost:8000. Vous serez redirigé vers la page d'index des catégories où vous pourrez commencer à créer des catégories et des rappels.

## Technologies utilisées

- Symfony 7.1 comme framework PHP
- Doctrine ORM pour la gestion de la base de données
- Twig comme moteur de templates
- Tailwind CSS pour le style (via symfonycasts/tailwind-bundle)