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

$requete = $myPDO->prepare('INSERT INTO postulant (photo_profil, date_naissance, poste_actuel, type_contrat, mon_cv, id_social, id_user) 
                                VALUES (:photo_profil, :date_naissance, :poste_actuel, :type_contrat, :mon_cv, :id_social, :id_user)');



//On récupére ce que l'utilisateur envoie par POST,si on le fait pas on aura des données NULL
$get_json = file_get_contents('php://input');

//La on décode le json
$obj = json_decode($get_json);

$requete->bindParam(':photo_profil', $obj->photo_profil,PDO::PARAM_STR);
$requete->bindParam(':date_naissance', $obj->date_naissance,PDO::PARAM_STR);
$requete->bindParam(':poste_actuel', $obj->poste_actuel,PDO::PARAM_STR);
$requete->bindParam(':type_contrat', $obj->type_contrat,PDO::PARAM_STR);
$requete->bindParam(':mon_cv', $obj->mon_cv,PDO::PARAM_STR);
$requete->bindParam(':id_social', $obj->id_social,PDO::PARAM_STR);
$requete->bindParam(':id_user', $obj->id_user,PDO::PARAM_STR);

$requete->execute();
$retour["success"] = true;
$retour["message"] = "Le postulant est ajouté";

echo json_encode($retour);