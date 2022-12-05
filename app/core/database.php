<?php

namespace Wise\Core;

use PDO;
use PDOStatement;

class database
{
    public PDO $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=Wise';
        $user = 'Wise';
        $password = '123!@#';

        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function prepare($sql): bool|PDOStatement
    {
        return Application::$app->database->pdo->prepare($sql);
    }
}