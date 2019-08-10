<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 1.-

- Clonar el proyecto marvel
- $ cd path/to/clone/project/marvel
- $ cp .env.example .env
- $ php artisan key:generate
- $ composer install

## 2.-

Agregar estas dos constantes con respectivos valores al final del archivo .env

- MARVEL_PUBLIC_KEY=your_public_key
- MARVEL_PRIVATE_KEY=your_private_key

## 3.-

Configura tus credenciales de la base de datos (mysql) en el archivo .env

- $ php artisan migrate
- Importa los datos a la DB que se acaba de generar