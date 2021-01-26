<?php
header("Content-Type: application/json; charset=UTF-8");
require '../Autoloader.php';
 
use \App\Autoloader;
use App\Database;
 
Autoloader::register();
try {
    $AccessDB = new Database("jobboard", "root", "root", "localhost");
    $myPDO = $AccessDB->getPDO();
    $retour["success"] = true;
    $retour["message"] = "Connexion à la base de donnée réussie";
} catch (Exception $e) {
    $retour["success"] = false;
    $retour["message"] = "Connexion à la base de donnée impossible";
}
/*if(    !empty($_POST['poste']) && !empty($_POST['description']) && !empty($_POST['connaissance_technique']) && !empty($_POST['type_contrat']) && !empty($_POST['date_limit_cand']) && !empty($_POST['adress']) && !empty($_POST['experience']) && !empty($_POST['id_entreprise'])*/
 
    $requete = $myPDO->prepare('INSERT INTO annonce(poste, description, connaissance_technique, date_offre, type_contrat, date_debut_cand, date_limit_cand, adress, experience, id_entreprise)
                                             VALUES (:poste, :description, :connaissance_technique, now(), :type_contrat, :date_debut_cand, :date_limit_cand, :adress, :experience, :id_entreprise)');
 
    
    $get_json = file_get_contents('php://input');
 
    $obj = json_decode($get_json);
 
    $requete->bindParam(':poste', $obj->poste,PDO::PARAM_STR);
    $requete->bindParam(':description', $obj->description,PDO::PARAM_STR);
    $requete->bindParam(':connaissance_technique', $obj->connaissance_technique,PDO::PARAM_STR);
    $requete->bindParam(':type_contrat', $obj->type_contrat,PDO::PARAM_STR);
    $requete->bindParam(':date_debut_cand', $obj->date_debut_cand,PDO::PARAM_STR);
    $requete->bindParam(':date_limit_cand', $obj->date_limit_cand,PDO::PARAM_STR);
    $requete->bindParam(':adress', $obj->adress,PDO::PARAM_STR);
    $requete->bindParam(':experience', $obj->experience,PDO::PARAM_STR);
    $requete->bindParam(':id_entreprise', $obj->id_entreprise,PDO::PARAM_INT);
 
    $requete->execute();
 
    $retour["success"] = true;
    $retour["message"] = "l'annonce a été ajouté";
 
echo json_encode($retour);