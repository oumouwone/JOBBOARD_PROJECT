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

$requete = $myPDO->prepare('INSERT INTO annonceur (poste_occup, nom_annonceur) 
                                     VALUES (:poste_occup, :nom_annonceur)');

//On récupére ce que l'utilisateur envoie par POST,si on le fait pas on aura des données NULL
$get_json = file_get_contents('php://input');

//La on décode le json
$obj = json_decode($get_json);

$requete->bindParam(':poste_occup', $obj->poste_occup,PDO::PARAM_STR);
$requete->bindParam(':nom_annonceur', $obj->nom_annonceur,PDO::PARAM_STR);

$requete->execute();
$retour["success"] = true;
$retour["message"] = "Annonceur a ajouté";

echo json_encode($retour);