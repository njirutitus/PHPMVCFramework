# PHP mini MVC Framework

## Installation

1. Download the archive or clone the project using git
2. Create `.env` file from `.env.example` file and adjust database and maill parameters
3. Run `composer install`
4. Run `php migrations.php` to apply migrations
5. Go to the `public` folder
6. Start php server by running command `php -S 127.0.0.1:8080`
7. Open in the browser [http://127.0.0.1:8080](http://127.0.0.1:8080)

## Overview

The entry point of the application is `public/index.php`. This file contains contains all the routes for your application as well as the configuration array.

## Requests

The are two types of requests:

- get
- post

The request should be specified when adding a route.

e.g

`$app->router->get('/contact',[SiteController::class,'contact']);`

`$app->router->post('/contact',[SiteController::class,'contact']);`
