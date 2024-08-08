# laravel_test1

[mac] $ cd docker-laravel
[mac] $ mkdir -p src
[mac] $ docker compose build
[mac] $ docker compose up -d
[mac] $ docker compose exec app composer create-project --prefer-dist laravel/laravel .
[mac] $ docker compose exec app php artisan key:generate
[mac] $ docker compose exec app php artisan storage:link
[mac] $ docker compose exec app chmod -R 777 storage bootstrap/cache
[mac] $ docker compose exec app php artisan migrate