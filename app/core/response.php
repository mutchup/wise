<?php

namespace Wise\Core;

class Response
{
    public function setStatusCode(int $code): void
    {
        http_response_code($code);
    }

    public function redirect($path): void
    {
        session_write_close();
        header('Location: ' . $path);
        exit;
    }
}