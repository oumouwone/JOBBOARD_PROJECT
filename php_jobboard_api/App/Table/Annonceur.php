<?php


namespace App\Table;


class Annonceur extends Table
{

    public static function getAnnonceur()
    {
        return self::query(
            "SELECT * FROM annonceur LEFT JOIN entreprise ON id_entreprise = entreprise.id",
            "");
    }
    public static function delAnnonceur(){
        {
            return self::query('DELETE FROM annonceur WHERE id = ?', [$_GET['id']]);
        }
    }
}