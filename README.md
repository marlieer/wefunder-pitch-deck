<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pitch Deck Project Set Up

This project was coded with Laravel 8 and Vue 3. To set up, first clone the project into a Ubuntu 20.04 machine. You'll need PHP 8 and composer. Now follow these instructions:

1. From the project directory, run ` composer update ` (After updating, this should also run composer install. If not run `composer install`).
2. Copy the sample environment file into .env: `cp .env.example .env`
3. Make an alias for Laravel's sail command: `alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`
4. Bring the containers up: `sail up -d` (Make sure no containers are running on localhost)
5. Run the migrations for the database: `sail artisan migrate`
6. Seed the database with sample companies: `sail artisan db:seed`
7. Make a symbolic link between the public directory and the storage directory: `sail artisan storage:link`
8. Make the application key: `sail artisan key:generate`

## Figma Design
The design for this project can be found [here](https://www.figma.com/file/n6FC7HqLQoqOs1tzlQmc63/Pitch-Deck?node-id=0%3A1) and the interactive design prototype can be found [here](https://www.figma.com/proto/n6FC7HqLQoqOs1tzlQmc63/Pitch-Deck?node-id=2%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A2). Not all of the design was implemented since the scope of the project was simply to implement a file uploader to display pitch decks.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
