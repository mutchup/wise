<?php

namespace Wise\Core;



class Request
{
    public function path(): string
    {
        $path       = htmlspecialchars( $_SERVER['REQUEST_URI'], ENT_QUOTES) ?? DS;
        $position   = strpos($path, '?');
        return !$position ? $path : substr($path, 0, $position);
    }

    public function method(): string
    {
        return strtolower(filter_input(INPUT_SERVER, 'REQUEST_METHOD'));
    }

    public function isGet(): string
    {
        return $this->method() === 'get';
    }

    public function isPost(): bool
    {
        return $this->method() === 'post';
    }

    public function getBody(): array
    {
        $body = [];
        if ($this->method() === 'get') {
            foreach ($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->method() === 'post') {
            foreach ($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }

    public function redirect(string $url): void
    {
        session_write_close();
        header('Location: '.$url);
        exit();
    }
}