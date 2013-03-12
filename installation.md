Installation

Configure your DB in 
    /application/config/database.php

Create your migration files:
    php artisan migrate:make <migration_name>
    php artisan migrate:make create_users
    php artisan migrate:make create_photos

Edit your migration files in:
    /application/migrations/yyyy_mm_ddnnnn_<migration_name>

Prepare DB for migration info (laravel_migrations table)
    php artisan migrate:install 

Execute your migration:
    php artisan migrate


Install Bob (http://bundles.laravel.com/bundle/bob)
    php artisan bundle:install bob

Generate key
    php artisan key:generate