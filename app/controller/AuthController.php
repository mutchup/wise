<?php

namespace Wise\Controller;

use Wise\Core\Application;
use Wise\Core\Controller;
use Wise\Core\Middlewares\authMiddleware;
use Wise\Core\Request;
use Wise\Core\Response;
use Wise\Model\login;
use Wise\Model\user;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(
            ['profile','dash', 'logout'],
            ['login']
        ));
    }
    public function login(Request $request, Response $response): bool|array|string
    {
        $login = new login();
        if ($request->isPost()){
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login()){
                $response->redirect('/dash');
            }
        }
        return $this->render('auth',[
            'model' => $login
        ]);
    }
    public function registry(Request $request): bool|array|string
    {
        $user = new user();
        if ($request->isPost()){
            $user->loadData($request->getBody());
            if ($user->validate() && $user->save()){
                Application::$app->session->setFlash('success', 'Thanks For register :)');
                Application::$app->request->redirect('/');
            }
        }
        return $this->render('auth',[
            'model' => $user
        ]);
    }
    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }
    public function profile(): bool|array|string
    {
        return $this->render('profile');
    }
    public function dash(): bool|array|string
    {
        return $this->render('dash');
    }
}