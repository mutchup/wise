<?php

namespace Wise\Model;

use Wise\Core\Application;
use Wise\Core\model;

class login extends model
{
    public string $Username = '';
    public string $Password = '';

    public function rules(): array
    {
        return [
            'Username' =>
                [
                    self::RULE_REQUIRED,
                    [self::RULE_MIN, 'min' => 3],
                    [self::RULE_MAX, 'max' => 18]
                ],
            'Password' => [self::RULE_REQUIRED]
        ];
    }
    public function login(): bool
    {
        $user = user::findOne(['Username' => $this->Username]);

        if (!$user){
            $this->addError('Username', 'User Does Not Exist');
            return false;
        }
        if (sha1($this->Password) !== $user->Password){
            $this->addError('Password', 'Error Password');
            return false;
        }
        return Application::$app->login($user);
    }
}