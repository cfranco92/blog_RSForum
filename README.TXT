RUN PROJECT
------------------------------------------------------------
Run the next command:
$ cd blog

Inside blog folder, run the next commands:
$ composer install
$ cp .env.example .env

In the database/.env file in the database configuration line change this data:
DB_CONNECTION=mysql
DB_HOST=remotemysql.com
DB_PORT=3306
DB_DATABASE=YupqlslKZY
DB_USERNAME=YupqlslKZY
DB_PASSWORD=NkUAdTz18O

Then, run the next commands:
$ php artisan key:generate
$ php artisan storage:link
$ php artisan serve
------------------------------------------------------------

LINK GITHUB:
https://github.com/cfrancobedoya/introduction_laravel.git