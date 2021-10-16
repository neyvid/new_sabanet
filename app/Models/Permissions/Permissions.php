<?php


namespace App\Models\Permissions;


class Permissions
{
    const TOTALACCESS = '1';
    const SUPPORTERACCESS = '2';
    const USERACCESS = '3';

    public static function getPermission()
    {
        return [
          self::TOTALACCESS=>'TOTALACCESS',
          self::SUPPORTERACCESS=>'SUPPORTERACCESS',
          self::USERACCESS=>'USERACCESS',
        ];

    }

    public static function getPermissionName(int $permissionNumber)
    {
        return self::getPermission()[$permissionNumber];
    }

}
