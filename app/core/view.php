<?php
namespace Wise\Core;

class View
{
    public function renderView($view, array $params): array|bool|string
    {
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }
        $viewContent = $this->renderViewOnly($view, $params);
        ob_start();
        include_once Application::$ROOT_DIR.'view'.DS.'layouts'.DS."$layoutName.php";
        $layoutContent = ob_get_clean();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderViewOnly($view, array $params): bool|string
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        extract(
            array_merge(
                Application::$app->language->load('default'),
                Application::$app->language->load($view)
            )
        );
        ob_start();
        include_once Application::$ROOT_DIR . 'view' . DS . "$view.php";
        return ob_get_clean();
    }
}