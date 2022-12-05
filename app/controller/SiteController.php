<?php

namespace Wise\Controller;

use Wise\Core\Application;
use Wise\Core\Controller;

class SiteController extends Controller
{
    public function home(): bool|array|string
    {
        return $this->render('home');
    }

    public function about(): bool|array|string
    {
        return $this->render('about');
    }

    public function language()
    {
        if (isset($_SERVER['HTTP_REFERER']) && !empty($_COOKIE['lang'])) {
            $_COOKIE['lang'] = $_COOKIE['lang'] == 'en' ? 'ar' : 'en';
            setcookie('lang', $_COOKIE['lang'], time() + (86400 * 7),  "/", "", "", TRUE);
            Application::$app->response->redirect($_SERVER['HTTP_REFERER']);
        } else {
            Application::$app->response->redirect(DS);
        }
    }
}