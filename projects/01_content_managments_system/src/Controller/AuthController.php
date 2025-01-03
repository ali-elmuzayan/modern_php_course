<?php

namespace App\Controller;

use App\Core\Container;
use App\Core\Database;
use App\Repository\PagesRepository;
use App\Support\AuthService;
use App\Support\Redirect;

class AuthController extends AbstractController
{
    public function __construct(private AuthService $authService, protected PagesRepository $pagesRepository)
    {
    }

    public function login(): void
    {
        if ($this->authService->isLoggedIn()) {
            Redirect::to('/admin/pages');
        }

        $this->render('admin/auth/login');
    }

    public function loginStore(): void
    {


        if (!empty($_POST)) {
            $password = $_POST["password"];
            $username = $_POST["username"];

            $loginState = $this->authService->handleLogin($username, $password);
            if ($loginState) {
                Redirect::withFlashMessage(route('admin/pages'), 'login successfully', 'login successfully');
            }
            redirect::to(route('admin/login'));
        }
    }
}