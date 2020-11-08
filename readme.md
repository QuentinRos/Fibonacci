# Fibonacci-Suite
 Petit projet avec pour thème la suite de Fibonacci

 ## Lien vers le site hébérgé via Heroku
 https://fibonaccisuite.herokuapp.com/
 
 # Mise en place : 

 ## Composer
 Il vous faut installer composer pour le bon fonctionnement de laravel  : 
 https://getcomposer.org

 ## Laravel 
 Vous pouvez trouver les étapes sur le sites officiel de laravel : https://laravel.com/docs/8.x/installation

 Ou suivres les étapes suivantes : 
 
 1. Installez laravel 
 
```
composer global require laravel/installer
```

2. Clonez le repository 

```
git clone https://github.com/QuentinRos/Fibonacci NomDuProjet
```

3. Allez dans la racine du projet et installer les dépendances de composer

```
composer install
```

4. Créez une copy du fichier .env 

```
cp .env.example .env
```

5. Générez la clé de criptage de l'application 

```
php artisan key:generate
```

6. lancez une simulation de serveur local

```
php artisan serve
```
Le site devrais être joignable localement
