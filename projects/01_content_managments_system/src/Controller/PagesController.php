<?php

namespace App\Controller;

use App\Repository\PagesRepository;

class PagesController extends AbstractController
{
    // here
    public function __construct(PagesRepository $pagesRepository)
    {
        parent::__construct($pagesRepository);
    }

    public function index() {
        echo 'hi every one';
    }

    public function showPage($pageKey)
    {


        $page = $this->pagesRepository->fetchBySlug((string)$pageKey);

        if (empty($page)) {
            $this->error404();
            return;
        }
//        echo "pagesController is showing the page: {$pageKey}\n";
        $this->render('frontend/pages/showPage', ['page' => $page]);
    }


}