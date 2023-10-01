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

**Start The Project**

Follow this link Follow this link https://laravel.com/docs/10.x/redis to install redis server and create Command 
Then run this in terminal
```
php artisan redis:subscribe
```

**Linux Environment**
Open Your Terminal and run
```
redis-server
```
```
redis-cli
```

**Test Project**

1-Keep the laravel command running

2-in redis-cli terminal insert this
```
publish test-chaneel "Hello"
```
3-Laravel Command terminal will print the message "Hello"
