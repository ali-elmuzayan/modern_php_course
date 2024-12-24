<?php

namespace App\Controller;

use App\Repository\PagesRepository;

abstract class AbstractController
{

    public function __construct(protected PagesRepository $pagesRepository)
    {
    }

    protected function render(string $view, array $data = [])
    {
        // where to extends from
        $mainFolder = explode('/', $view,2)[0];

        extract($data);
        ob_start();
        require __DIR__ . '/../../views/' . $view . '.view.php';
        $contents = ob_get_clean();
        $navigation = $this->pagesRepository->fetchForNavigation();
        require __DIR__ . '/../../views/'. $mainFolder .'/layouts/main.view.php';
    }

    protected function error404()
    {
        http_response_code(404);

        $this->render('frontend/abstract/error404');
    }
}