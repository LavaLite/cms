## Lavalite PHP Framework
*Version Beta 2 - June 28th 2014*

This is an implementation of the backend of lavalite, which can be used for web based application and Content Management System based upon [Laravel 4](http://laravel.com/) and [Twitter Bootstrap 3](http://getbootstrap.com/)


## System Requirements

Lavalite is designed to run on a  machine with PHP 5.5 and MySQL 5.5.

* PHP >= 5.5.9 with
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
* [Composer](https://getcomposer.org) installed to load the dependencies of Lavalite.
* [bower](http://bower.io/) for installing javascript libraries.
* [glup](http://gulpjs.com/) for managing javascript and css.

## Installation

Please check the system requirements before installing Lavalite.

1. You may install by cloning from github, or via composer.
  * Github: `git clone git@github.com:LavaLite/cms.git`
    * From a command line open in the folder, run `composer install`.
  * Composer: `composer create-project LavaLite/cms `
3. Then, run `bower install` to install javascript libraries.
4. Enter your database details in `.env` file on root folder.
5. Run `php artisan migrate` to setup your database.
6. Run `php artisan db:seed --class=LavaliteTableSeeder` to seed your database.
7. You can contigure mail server details in `config/mail.php`.
8. You can configure the site in the app/config folder before production.
9. Finally, setup an [Apache VirtualHost](http://httpd.apache.org/docs/current/vhosts/examples.html) to point to the "public" folder.
  * For development, you can simply run `php artisan serve`

####Permissions
Lavalite may require one set of permissions to be configured: folders within `storage` require write access by the web server.
For more detals on installation check laravel installation giude
http://laravel.com/docs/5.1/installation

## Login details
###Admin
Url: sites-public-url/admin
Superuser : superuser@superuser.com - superuser@superuser
Admin : admin@admin.com - admin@admin

### User
Url: sites-public-url/user
User: user@user.com - user@user

## Demo
Public [http://demo.lavalite.org](http://demo.lavalite.org)

Admin [http://demo.lavalite.org/admin](http://demo.lavalite.org/admin)

Superuser : superuser@superuser.com - superuser@superuser

Admin : admin@admin.com - admin@admin

##Frameworks/Libraries

### PHP Libraries
* [laravel/laravel](https://github.com/laravel/laravel) - A PHP Framework For Web Artisans
* [anahkiasen/former](https://github.com/Anahkiasen/former‎) -A powerful form builder
* [teepluss/theme](https://github.com/teepluss/laravel4-theme) - Theme and asset managing for laravel 4
* [intervention/imagecache](https://github.com/Intervention/imagecache) - Caching extension for the Intervention [Image Class](https://github.com/Intervention/image)
