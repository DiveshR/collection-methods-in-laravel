# Laravel Collection Methods

Some of laravel collection Methods in this Series.
More in ...
https://laravel.com/docs/10.x/collections


* Author: Divesh Kumar
* Twitter: [@divesh20july](https://twitter.com/divesh20july)

# Usage
Setup Repo

`````````
git clone git@github.com:DiveshR/collection-methods-in-laravel.git
cd collection-methods-in-laravel
composer install
cp .env.example .env 
php artisan key:generate
php artisan migrate --seed
php artisan cache:clear && php artisan config:clear 
php artisan serve 
````````` 
# Working With Numbers
Collections Methods Related to Numbers

# 1) count()
It returns total number of records for a given model.

```php

Article::count();
In our case as realationship with user
Article::with('user')->count();

```