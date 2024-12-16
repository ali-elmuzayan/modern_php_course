<?php

use App\Support\Container;

$container = new \App\Support\Container();


// pdo
$container->bind('pdo', function () {
    return require __DIR__ . '/config/db.php';
});

$container->bind('pagesRepository', function (Container $container) {
    $pdo = $container->get('pdo');
    return new \App\Repository\PagesRepository($pdo);
});

$container->bind('pagesController', function (Container $container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Frontend\Controller\PagesController($pagesRepository);
});

$container->bind('notFoundController', function (Container $container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Frontend\Controller\NotFoundController($pagesRepository);
});

$container->bind('pagesAdminController', function (Container $container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Frontend\Controller\PagesAdminController($pagesRepository);
});
