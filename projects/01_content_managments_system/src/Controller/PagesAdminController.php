<?php

namespace App\Controller;

use App\Support\Flash;
use App\Support\Redirect;
use App\Traits\HelperTrait;
use JetBrains\PhpStorm\NoReturn;

class PagesAdminController extends AbstractController
{
    use HelperTrait;

    public function index(): void
    {
        $pages = $this->pagesRepository->get();

        $this->render('admin/pages/index', ['pages' => $pages]);
    }

    public function create(): void
    {

        $this->render('admin/pages/create');
    }

    #[NoReturn]
    public function store(): void
    {

        // validate the request
        if (!empty($_POST)) {
            $title = @(string)($_POST['title'] ?? '');
            $slug = @(string)($_POST['slug'] ?? '');
            $content = @(string)($_POST['content'] ?? '');

            $slug = $this->validSlug($slug);

            if (!empty($title) || !empty($slug) || !empty($content)) {
                $slugExist = $this->pagesRepository->is_slug_exist($slug);
                if (empty($slugExist)) {
                    $this->pagesRepository->create($title, $slug, $content);

                    Redirect::withFlashMessage('admin/pages', 'page created', 'The page Created Successfully');
                } else {
                    Flash::flash('allField', 'the slug is already exist', 'error');
                }

            } else {
                Flash::flash('allField', 'you need to fill all field', 'error');
            }

        } else {
            Flash::flash('allField', 'you need to fill all field', 'error');
        }
        Redirect::to('admin/pages/create');
    }

    #[NoReturn]
    public function delete($id): void
    {
        if ($this->pagesRepository->is_exist($id)) {
            $this->pagesRepository->delete($id);
            Redirect::withFlashMessage('admin/pages', 'page Deleted', 'The page Deleted Successfully');
        } else {
            Redirect::withFlashMessage('admin/pages', 'page Not Found', 'The page Not Found');
        }
    }

    #[NoReturn]
    public function edit(int $id): void
    {
        $page = $this->pagesRepository->fetchById($id);
        $this->render('admin/pages/edit', ['page' => $page]);
    }

    #[NoReturn]
    public function update(int $id): void
    {

        if (!empty($id) && $id > 0) {
            $title = @(string)($_POST['title'] ?? '');
            $content = @(string)($_POST['content'] ?? '');

            if (!empty($title) || !empty($content)) {
                $this->pagesRepository->update($id, $title, $content);
                redirect::withFlashMessage('admin/pages', 'page Updated', 'The page Updated Successfully');
            } else {
                flash::flash('allField', 'you need to fill all field', 'error');
            }

        }
        redirect::withFlashMessage(['admin/pages/edit', 'id' => $id], 'page doesn\'t', 'The page Updated Successfully', 'error');
    }
}