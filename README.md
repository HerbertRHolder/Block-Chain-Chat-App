# Block Chain Chat App Prototype
This is just a proof of concept application for checking feasability of a feature

## Getting Started with Laravel
<a href="https://laravel.com/docs/10.x#why-laravel">Laravel Documentation</a>

Make sure to have the following installed on your local machine
 
 - PHP Version >= 8
 - Composor PHP Package manager
 - node 
 - npm (node package manager)
## Composer Installation
<a href="https://getcomposer.org/doc/00-intro.md#installation-windows">Installation Documentation</a>

Verify all Dependencies

Check Composer Version
```
composer -V
```
Notice uppercase -V

Check PHP Version
```
php -v
```

Check Node Version

```
node -v
```
Check NPM Version

```
npm -v
```

 Laravel uses a CLI none as Artisan to automate boilerplate tasks and manage the project environment like making controller classes and migrating your tables as well as making models.

<br>

# Quick commands to get started

View all Artisan commands
```php
php artisan -h
```
Start a server
```php
php artisan serve
```
Please Note the URI to the Hive JSON Response is Located in /hive once you start the server. All ROUTE Declarations can be found in `routes/web.php`. In Laravel controllers and routes are separate operations (Unlike JAVA), controllers handling business logic and routes handle page linking.

Make a controller 
```php
php artisan make:controller [controller-name]
```
Please Note that Laravel will pass an `error` if the the controller name is different than the class name 


Make a model 
```php
php artisan make:model [model-name]
```
Refer to the documentation for more commands