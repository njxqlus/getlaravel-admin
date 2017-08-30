# Laravel starter kit with admin

[![Packagist](https://img.shields.io/packagist/v/njxqlus/getlaravel-admin.svg?style=flat-square)](https://packagist.org/packages/njxqlus/getlaravel-admin)

## What's inside?

- Laravel 5.5 dev version

- Fix "1071 Specified key was too long; max key length is 767 bytes" error

- Move Uses Model to Models folder and App\Models namespace

- santigarcor/laratrust:4.0.* and setup it

- barryvdh/laravel-debugbar:~3.0

- make:auth

- spatie/laravel-backup:dev-laravel-55 and setup it

- Russian traslatian for default Laravel lang files

- `php artisan preset none`

- barryvdh/laravel-ide-helper and setup it 

## Installation

### Via Composer

1) `composer create-project njxqlus/getlaravel myproject`

1) `npm install`

1) Setup database

1) `php artisan migrate`

### Via git clone

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
