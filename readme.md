<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

#Laravel course

1. First step
Create .env files:
``` Bash 
cp .env.example .env

cp app/.env.example app/.env
 and write in .env DOCKER_PREFIX=laravel_course
``` 
2. Generate key (into php container)
```bash
php artisan key:generate
