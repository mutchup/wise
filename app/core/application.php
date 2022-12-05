<?php

namespace Wise\Core;

use Exception;

class Application
{
    public static string $ROOT_DIR;
    public static Application $app;
    public string $userClass;
    public string $layout = 'main';
    public Request $request;
    public Response $response;
    public Router $router;
    public Session $session;
    public Database $database;
    public ?DataModel $user;
    public ?Controller $controller = null;
    public Language $language;
    public View $view;

    public function __construct($rootPath, array $config)
    {
        $this->userClass    = $config['userClass'];
        self::$ROOT_DIR     = $rootPath;
        self::$app          = $this;
        $this->request      = new Request();
        $this->response     = new Response();
        $this->router       = new Router($this->request, $this->response);
        $this->session      = new Session();
        $this->database     = new Database();
        $this->language     = new Language();
        $this->view         = new View();

        $primaryValue = $this->session->get('user');
        if ($primaryValue){
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        }else{
            $this->user = null;
        }
    }
    public static function iGuest(): bool
    {
        return !self::$app->user;
    }
    public function run(): void
    {
        try {
            echo $this->router->resolve();
        }catch (Exception $e){
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_error', [
                'exception' => $e
            ]);
        }
    }
    public function login(dataModel $user): bool
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }
    public function logout(): void
    {
        $this->user = null;
        $this->session->remove('user');
    }
}