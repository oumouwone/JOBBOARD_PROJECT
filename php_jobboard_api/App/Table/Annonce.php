<?php


namespace App\Table;
use \PDO;


class Annonce extends Table
{
    public static function getAnnonce()
    {
        return self::query(
            "SELECT annonce.id , annonce.poste, annonce.description, annonce.connaissance_technique, annonce.experience, annonce.date_debut_cand, annonce.date_limit_cand, annonce.adress, annonce.type_contrat, entreprise.email FROM annonce LEFT JOIN entreprise ON id_entreprise = entreprise.id ORDER BY  date_offre DESC",
            "",
            false);
    }

    public static function getAnnonceById($id)
    {
        return self::query(
            "SELECT * FROM annonce LEFT JOIN entreprise ON id_entreprise = entreprise.id WHERE annonce.id ='".$id."' ORDER BY  date_offre DESC",
            "",
            true);
    }

    public static function delAnnonce(){
        {
            return self::query('DELETE FROM annonce WHERE id = ?', [$_GET['id']]);
        }
    }

    /*
    public static  function addAnnonce(){


        if( !empty($_POST['poste'])
            && !empty($_POST['description'])
            && !empty($_POST['connaissance_technique'])
            && !empty($_POST['date_offre'])
            && !empty($_POST['type_contrat'])
            && !empty($_POST['date_debut_cand'])
            && !empty($_POST['date_limit_cand'])
            && !empty($_POST['adress'])
            && !empty($_POST['experience'])
            && !empty($_POST['id_entreprise'])
        ){

            $requete = self::query ("INSERT INTO annonce (id, poste, description, connaissance_technique, date_offre, date_debut_cand, date_limit_cand, adress, experience, type_contrat, id_entreprise) 
                                             VALUES (NULL, :poste, :description, :connaissance_technique, :date_offre, :date_debut_cand, :date_limit_cand, :adress, :experience, :type_contrat, :id_entreprise);",
                "",
                "true");
            $requete->bindParam(':poste', $_POST['poste']);
            $requete->bindParam(':description', $_POST['description']);
            $requete->bindParam(':connaissance_technique', $_POST['connaissance_technique']);
            $requete->bindParam(':date_offre', $_POST[':date_offre']);
            $requete->bindParam(':date_debut_cand', $_POST['date_debut_cand']);
            $requete->bindParam(':date_limit_cand', $_POST['date_limit_cand']);
            $requete->bindParam(':adress', $_POST['adress']);
            $requete->bindParam(':experience', $_POST['experience']);
            $requete->bindParam(':type_contrat', $_POST['type_contrat']);
            $requete->bindParam(':id_entreprise', $_POST['id_entreprise']);
            if( $requete->execute() ){
                $success = true;
                $msg = 'L\'annonce a bien été ajouté';
            } else {
                $msg = "Une erreur s'est produite";
            }
        } else {
            $msg = "Il manque des informations";
        }
    }
    */

}