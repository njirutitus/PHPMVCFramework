<?php


use tn\phpmvc\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

if (!getenv('DB_DSN')) {
    putenv("DB_DSN=$_ENV[DB_DSN]");
    putenv("DB_USER=$_ENV[DB_USER]");
    putenv("DB_PASSWORD=$_ENV[DB_PASSWORD]");
    putenv("MAIL_HOST=$_ENV[MAIL_HOST]");
    putenv("MAIL_USERNAME=$_ENV[MAIL_USERNAME]");
    putenv("MAIL_PASSWORD=$_ENV[MAIL_PASSWORD]");
    putenv("MAIL_PORT=$_ENV[MAIL_PORT]");

}

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => getenv('DB_DSN'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD')
    ],
    'mail' => [
        'host' => getenv('MAIL_HOST'),
        'username' => getenv('MAIL_USERNAME'),
        'password' => getenv('MAIL_PASSWORD'),
        'port' => getenv('MAIL_PORT'),
    ]
];

$app = new Application(dirname(__DIR__), $config);
$app->router->get('/',[SiteController::class,'home']);
$app->router->get('/contact',[SiteController::class,'contact']);
$app->router->post('/contact',[SiteController::class,'contact']);

$app->router->get('/login',[AuthController::class,'login']);
$app->router->get('/register',[AuthController::class,'register']);
$app->router->post('/login',[AuthController::class,'login']);
$app->router->post('/register',[AuthController::class,'register']);
$app->router->get('/logout',[AuthController::class,'logout']);
$app->router->get('/profile',[AuthController::class,'profile']);

$app->run();