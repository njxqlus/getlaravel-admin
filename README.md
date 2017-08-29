# Laravel starter kit with admin

[![Packagist](https://img.shields.io/packagist/v/njxqlus/getlaravel-admin.svg?style=flat-square)](https://packagist.org/packages/njxqlus/getlaravel-admin)

## What's inside?

1) Laravel 5.5 dev version

1) Fix "1071 Specified key was too long; max key length is 767 bytes" error

1) Move Uses Model to Models folder and App\Models namespace

1) santigarcor/laratrust:4.0.* and setup it

1) barryvdh/laravel-debugbar:~3.0

1) make:auth

1) spatie/laravel-backup:dev-laravel-55 and setup it

1) Russian traslatian for default Laravel lang files

1) `php artisan preset none`

1) barryvdh/laravel-ide-helper and setup it 

## Installation

1) `git clone https://github.com/njxqlus/getlaravel-admin.git myproject`

1) Copy and rename .env.example to .env

1) `php artisan key:generate`

1) `composer install`

1) `npm install`

1) Setup database

1) `php artisan migrate`
 
## Backups Setup

1) Setup `MYSQLDUMP_PATH` in .env file for MySQL backups

1) Setup CRON on server like: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`

## IDE Helper Setup

1) `php artisan ide-helper:meta`

1) `php artisan ide-helper:model`

1) `php artisan ide-helper:generate`

## Usage

Let's build something awesome!

## Credits

- [Mikael Agabalyants](https://github.com/njxqlus/)
- [All contributors](https://github.com/njxqlus/laravel-helpers/graphs/contributors)
