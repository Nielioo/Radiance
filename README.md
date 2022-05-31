# Radiance
Multi-platform project on website and mobile apps about Physics Grade XI (January 2022)

Demo Video: https://youtu.be/spHUbxrzlpI

> **After Pulling from GitHub**
```
cp .env.example .env
composer install
php artisan key:generate
```

> **Deploy Laravel Passport**
```
composer require laravel/passport
php artisan migrate
php artisan passport:install
```

> **Run** ```php artisan passport:install``` **if oauth_clients gone**

> **Deploy Storage Link**
```
php artisan storage:link
```

> **Radiance Seeder - Please do it in order**
```
php artisan db:seed --class=Fis11GameStageSeeder
php artisan db:seed --class=Fis11GameLevelSeeder
php artisan db:seed --class=Fis11GameTopicSeeder
php artisan db:seed --class=Fis11GameProblemSeeder
php artisan db:seed --class=Fis11GameAnswerSeeder
php artisan db:seed --class=Fis11CharacterSkinSeeder
php artisan db:seed --class=Fis11ProfileBorderSeeder
```

> **Quick Guide - When you wanna refresh the database**
```
php artisan migrate:fresh
php artisan passport:install
```
**_(+ all seeders)_**
