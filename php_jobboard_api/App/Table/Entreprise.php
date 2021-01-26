<?php


namespace App\Table;


class Entreprise extends Table
{
    public static function getEntreprise()
    {
        return self::query(
            "SELECT * FROM entreprise LEFT JOIN annonceur ON entreprise.id_annonceur = annonceur.id",
            "",
            false);
    }
    public static function getEntrepriseById($id)
    {
        return self::query(
            "SELECT * FROM entreprise LEFT JOIN social ON entreprise.id_social = social.id WHERE entreprise.id ='".$id."'",
            "",
            true);
    }
    public static function delEntreprise(){
        {
            return self::query('DELETE FROM entreprise WHERE id = ?', [$_GET['id']]);
        }
    }
}