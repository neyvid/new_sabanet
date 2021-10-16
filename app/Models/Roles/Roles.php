<?php


namespace App\Models\Roles;


class Roles
{
    const MANAGER = 2;
    const NORMAL_USER = 3;
    const SUPPORTER = 4;

    public static function getRoles()
    {

        return [
            self::MANAGER => 'MANAGER',
            self::NORMAL_USER => 'NORMAL_USER',
            self::SUPPORTER => 'SUPPORTER',
        ];
    }

    public static function getFarsiRoles()
    {

        return [
            self::MANAGER => 'مدیرکل',
            self::NORMAL_USER => 'کاربرعادی',
            self::SUPPORTER => 'پشتیبانی',
        ];
    }

    public static function getRoleName(int $roleNumber)
    {
        return self::getRoles()[$roleNumber];
    }
    public static function getFarsiRoleName(int $roleNumber)
    {
        return self::getFarsiRoles()[$roleNumber];
    }
}
