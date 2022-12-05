<?php

namespace Wise\Model;

use Wise\Core\userModel;

class user extends userModel
{
    public string $Username = '';
    public string $Password = '';
    public string $Email = '';
    public string $PhoneNumber = '';

    public static function tableName(): string
    {
        return 'Users';
    }
    public static function primaryKey(): string
    {
        return 'UserId';
    }
    public function attributes(): array
    {
        return ['Username', 'Password'];
    }
    public function rules(): array
    {
        return [
            'Username' =>
                [
                    self::RULE_REQUIRED,
                    [self::RULE_MIN, 'min' => 3],
                    [self::RULE_MAX, 'max' => 18],
                    [self::RULE_UNIQUE, 'class' => self::class]
                ],
            'Password' => [self::RULE_REQUIRED]
        ];
    }
    public function save(): bool
    {
        $this->Password = sha1($this->Password);
        return parent::save();
    }

    public function getDisplayName(): string
    {
        return $this->Username;
    }
    public function getDisplay($data): string
    {
        return $this->$data;
    }
}