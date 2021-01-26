<?php


namespace App\Table;


class User extends Table
{
    public static function getUser()
    {
        return self::query(
            "SELECT * FROM user ORDER BY  last_name",
            "");
    }
    public static function delUser(){
        {
            return self::query('DELETE FROM user WHERE id = ?', [$_GET['id']]);
        }
    }

}