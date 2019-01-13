# Laravel Test

This is a test i have written for a company.

This is my first try with the laravel framework. 

## Installation
1. [install composer](https://getcomposer.org/download/)
2. run `composer install`
3. run `cp .env.example .env`
4. Setup the .env file. it should contain your database, email, google captcha attributes. The most important is the database.  
5. Assuming you have a new database:
    1. run `php artisan migrate` create necesary table structure in the database
    2. run `php artisan db:seed` load the basic data to the tables
6. run `php artisan serve` to start the server

## About Laravel

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
