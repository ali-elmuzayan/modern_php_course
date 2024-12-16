<?php

require_once __DIR__ . '/inc/bootstrap.inc.php';
require_once __DIR__ . '/bootstrap.php';


$route = @(string)($_GET['route'] ?? 'pages');


if ($route === 'pages') {
    $page = @(string)($_GET['page'] ?? 'index');
    $pagesController = $container->get('pagesController');
    $pagesController->showPage($page);
} elseif ($route === 'admin/pages') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->index();
} elseif ($route === 'admin/pages/create') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->create();
} elseif ($route === 'admin/pages/store') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->store();
} elseif ($route === 'admin/pages/delete') {
    $id = $_GET['id'];
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->delete($id);
} elseif ($route === 'admin/pages/edit') {
    $id = $_GET['id'];
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->edit($id);
} elseif ($route === 'admin/pages/update') {
    $id = (int)($_GET['id'] ?? 0);
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->update($id);
} else {
    $notFoundController = $container->get('notFoundController');
    $notFoundController->error404();
}
