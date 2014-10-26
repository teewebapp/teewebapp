## TeeWebApp

TeeWebApp is a PHP WebApplication build on top of Laravel Framwork, and separated in modules.

### Install

```
composer create-project teewebapp/teewebapp my-dir
cd my-dir
php artisan modules:publish
php artisan modules:migrate
php artisan modules:seed

You need to run command "module:publish", "modules:migrate" and "modules:seed" every time when you install a new module.

### Avaliables Modules

* teewebapp/system
* teewebapp/front
* teewebapp/page
* teewebapp/i18n
* teewebapp/gallery
* teewebapp/user
* teewebapp/admin


