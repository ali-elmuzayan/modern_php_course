<?php
session_start();

use App\Core\Container;
use App\Core\Database;
use App\Core\Dispatcher;
use App\Core\Router;

require_once __DIR__ . '/config/env.php';
require_once __DIR__ . '/inc/bootstrap.inc.php';


// to get the path:
$path = path();


$router = new Router();

// pages route
$router->add('/', ['controller' => 'pagesController', 'action' => 'index']);
$router->add('/pages', ['controller' => 'pagesController', 'action' => 'index']);

// admin routes:
$router->add('/admin/pages', ['controller' => 'pagesAdmin', 'action' => 'index']);
$router->add('/admin/pages/create', ['controller' => 'pagesAdminController', 'action' => 'create']);
$router->add('/admin/pages/store', ['controller' => 'pagesAdminController', 'action' => 'store']);
$router->add('/admin/login', ['controller' => 'AuthController', 'action' => 'login']);
$router->add('/admin/login/store', ['controller' => 'AuthController', 'action' => 'loginStore']);

// dynamic routes
$router->add('/{controller}/{id:\d+}/{action}');
$router->add('/{controller}/{action}');


$container = Container::getInstance();
$container->set('App\Core\Database', function () {
    return new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);

});

$dispatcher = new Dispatcher($router, $container);
$dispatcher->handle($path);

