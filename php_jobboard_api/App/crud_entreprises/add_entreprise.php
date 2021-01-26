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

$requete = $myPDO->prepare('INSERT INTO entreprise (logo, name_entreprise, annee_crea, desc_entreprise, siege_social, valeur, type_entreprise, email, id_annonceur, id_social)
                                           VALUES (:logo, :name_entreprise, :annee_crea, :desc_entreprise, :siege_social, :valeur, :type_entreprise, :email, :id_annonceur, :id_social)');

//On récupére ce que l'utilisateur envoie par POST,si on le fait pas on aura des données NULL
$get_json = file_get_contents('php://input');

//La on décode le json
$obj = json_decode($get_json);

$requete->bindParam(':logo', $obj->logo,PDO::PARAM_STR);
$requete->bindParam(':name_entreprise', $obj->name_entreprise,PDO::PARAM_STR);
$requete->bindParam(':annee_crea', $obj->annee_crea,PDO::PARAM_STR);
$requete->bindParam(':desc_entreprise', $obj->desc_entreprise,PDO::PARAM_STR);
$requete->bindParam(':siege_social', $obj->siege_social,PDO::PARAM_STR);
$requete->bindParam(':valeur', $obj->valeur,PDO::PARAM_STR);
$requete->bindParam(':type_entreprise', $obj->type_entreprise,PDO::PARAM_STR);
$requete->bindParam(':email', $obj->email,PDO::PARAM_STR);
$requete->bindParam(':id_annonceur', $obj->id_annonceur,PDO::PARAM_INT);
$requete->bindParam(':id_social', $obj->id_social,PDO::PARAM_INT);

$requete->execute();
$retour["success"] = true;
$retour["message"] = "entreprise a ajouté";

echo json_encode($retour);