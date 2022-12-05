<?php

namespace Wise\Core\Middlewares;

use Exception;
use Wise\Core\Application;

class authMiddleware extends baseMiddleware
{
    public array $guest = [];
    public array $user = [];

    public function __construct(array $guest = [], array $user = [])
    {
        $this->guest = $guest;
        $this->user = $user;
    }
    /**
     * @throws Exception
     */
    public function execute()
    {
        if (!Application::iGuest()){
            if (empty($this->user) || in_array(Application::$app->controller->action, $this->user)){
                Application::$app->request->redirect('/dash');
            }
        }else{
            if (empty($this->guest) || in_array(Application::$app->controller->action, $this->guest)){
                throw new Exception("Forbidden", 403);
            }
        }
    }
}