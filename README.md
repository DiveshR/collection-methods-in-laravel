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
//In our case as realationship with user
Article::with('user')->count();

Article::where('is_pblished', true)->count();

```
# 2) countBy()
It group the records by the given column and return count of each group.
__NOTE:__ Column need to be numeric value otherwise it will be a type error exeption.

```php
Acticle::pluck('user_id')->countBy();
```
# 3) max()
It return the max value of a given columns.

```php
Acticle::max('min_to_read'); //return article record having max value of min_to_value column

Article::whereBetween('user_id',[1,5])->max('min_to_read');//return article record having max value of min_to_value column from list of users id lies between 1 to 5
```

# 4) min()
It return the min value of a given columns. Reverse of max

```php
Acticle::min('min_to_read');
```

# 5) median()
It retrive the middle value of a set of number.

```php
Acticle::pluck('min_to_read')->median();
```

# 6) mode()
It return most frequent occuring value in a record.

```php
Acticle::pluck('user_id')->mode(); //It output user with most articles.
Article::where('is_published',true)->pluck('user_id')->mode(); //It output user with most published articles.

```

# 6) inRandomOrder()
It return random record from a given model.

```php
Acticle::inRandomOrder()->first();
Article::inRandomOrder()->value('id') // it only return id randomly from records

```

# 6) sum()
It return total number of a given column.

```php
Acticle::sum('min_to_read');

```