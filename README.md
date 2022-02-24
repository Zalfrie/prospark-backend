[![CI](https://github.com/Zalfrie/prospark-backend/actions/workflows/laravel.yml/badge.svg)](https://github.com/Zalfrie/prospark-backend/actions/workflows/laravel.yml)

API Documentation : 
- http://yourdoaminname/api/documentation

How to run :
- pull this repo
- open in IDE
- copy .env.example to .env
- set Database connection in .env file
- change ``APP_URL`` variable in .env to ``APP_URL=http://yourdomainname``
- run ``composer install``
- run ``php artisan key:generate``
- run ``php artisan migrate``
- run ``php artisan db:seed``
- run app use ``php artisan serve``
