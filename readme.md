## Lavalite - Bootstrapper for Laravel 5 CMS or Application.

*Version Beta

This is an implementation of the backend of lavalite, which can be used for web based application and Content Management System based upon [Laravel 5.1](http://laravel.com/) and [Twitter Bootstrap 3](http://getbootstrap.com/)


## System Requirements

Lavalite is designed to run on a  machine with PHP 5.5 and MySQL 5.5.

* PHP >= 5.5.9 with
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
* [Composer](https://getcomposer.org) installed to load the dependencies of Lavalite.

## Installation

Please check the system requirements before installing Lavalite.

1. You may install by cloning from github, or via composer.
  * Github:
    * `git clone git@github.com:LavaLite/cms.git`
    * From a command line open in the folder, run `composer install`.
  * Composer:
    * `composer create-project LavaLite/cms your-project-name dev-master`
4. Publish migratins seeds config etc `php artisan vendor:publish`
5. Enter your database details in `.env` file on root folder.
6. Run `php artisan migrate` to setup your database.
7. Execute below commands to seed your tables, before executing this commands run `composer dump-autoload` to load published table seeders to the class map.
   - `php artisan db:seed --class=PageTableSeeder`
   - `php artisan db:seed --class=MenuTableSeeder`
   - `php artisan db:seed --class=UserTableSeeder`
8. You can contigure mail server details in `config/mail.php`.
9. You can configure the site in the app/config folder before production.
10. Finally, setup an [Apache VirtualHost](http://httpd.apache.org/docs/current/vhosts/examples.html) to point to the "public" folder.
  * For development, you can simply run `php artisan serve`

####Permissions
Lavalite may require one set of permissions to be configured: folders within `storage` require write access by the web server.
For more detals on installation check laravel installation giude
http://laravel.com/docs/5.1/installation

## Admin login details
- Url: sites-public-url/admin
- Superuser : superuser@superuser.com - superuser@superuser

## Demo
- Public [http://demo.lavalite.org](http://demo.lavalite.org)
- Admin [http://demo.lavalite.org/admin](http://demo.lavalite.org/admin)
- Superuser : superuser@superuser.com - superuser@superuser

##Frameworks/Libraries

### PHP Libraries
* [laravel/laravel](https://github.com/laravel/laravel) - A PHP Framework For Web Artisans
* [anahkiasen/former](https://github.com/Anahkiasen/former‎) - A powerful form builder
* [teepluss/theme](https://github.com/teepluss/laravel4-theme) - Theme and asset management