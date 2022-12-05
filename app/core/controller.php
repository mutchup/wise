<?php

namespace Wise\Core;

use Wise\Core\Middlewares\baseMiddleware;

abstract class Controller
{
    public string $layout           = 'main';
    public string $action           = '';
    protected array $middlewares    = [];

    public function render($view, $params = []): bool|array|string
    {
        return Application::$app->view->renderView($view, $params);
    }
    public function registerMiddleware(baseMiddleware $middleware): void
    {
        $this->middlewares[] = $middleware;
    }
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}