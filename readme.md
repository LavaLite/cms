## Lavalite - Bootstrapper for Laravel Content Management System.

This is an implementation of Content Management System based on [Laravel 5.2](http://laravel.com/) and [Twitter Bootstrap 3](http://getbootstrap.com/)

## Documentation
Visit [Readme](https://lavalite.readme.io) for documentation

## System Requirements

Lavalite is designed to run on a  machine with PHP 5.5.9 and MySQL 5.5.

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
    * `composer create-project LavaLite/cms --prefer-dist website`
2. Run the install command to get you started:
   `php artisan lavalite:install`
4. You can configure mail server details in `config/mail.php`.
5. You can configure the site in the config folder before production.
6. Finally, setup an [Apache VirtualHost](http://httpd.apache.org/docs/current/vhosts/examples.html) to point to the "public" folder.
  * For development, you can simply run `php artisan serve`

####Permissions
Lavalite may require one set of permissions to be configured: folders within `storage` require write access by the web server.
For more detals on installation check laravel installation giude
http://laravel.com/docs/5.1/installation

## Admin login details
- Url: sites-public-url/admin
- You can login with the superuser password provided at he time of installation.

## Demo
- Public [http://demo.lavalite.org](http://demo.lavalite.org)
- Admin [http://demo.lavalite.org/admin](http://demo.lavalite.org/admin)
- Superuser : superuser@superuser.com - superuser@superuser

##Frameworks/Libraries

### PHP Libraries
* [laravel/laravel](https://github.com/laravel/laravel) - A PHP Framework For Web Artisans

### Javascript Libraries
* Updating

## License

The Lavalite CMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Support 

Make a donation to support the work of the Open Source Initiative.

[DONATE](https://www.paypal.me/renfos)
