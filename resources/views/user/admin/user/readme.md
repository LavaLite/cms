This is a Laravel 5 package that provides user management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lavalite/user`.

    "lavalite/user": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Lavalite\User\Providers\UserServiceProvider::class,

```

And also add it to alias

```php
'User'  => Lavalite\User\Facades\User::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Lavalite\User\Providers\UserServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


