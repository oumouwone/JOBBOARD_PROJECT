<?php


namespace App\Table;


class Postulant extends Table
{
    public static function getPostulant()
    {
        return self::query(
            "SELECT * FROM  postulant LEFT JOIN user ON id_user = user.id ",
            "");
    }
    public static function delPostulant(){
        {
            return self::query('DELETE FROM postulant WHERE id = ?', [$_GET['id']]);
        }
    }
}