# Laravel-Redis

Demo for importing files to database with laravel excel

![Static Badge](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Static Badge](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)


**Installation**

```
git clone  https://github.com/MomenSamir/laravel-redis.git
```
> **Note**
> 
> rename .env.example to .env.
> 
> add the database settings.

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
REDIS_CLIENT=predis
REDIS_DATABASE=0

```
php artisan key:generate
```
```
php artisan optimize:clear
```

```
composer install
```
```
php artisan serve   
```
