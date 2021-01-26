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
$id = $_GET['id'];
$requete = $myPDO->prepare("DELETE FROM annonceur WHERE id = :id");
$requete->bindParam(':id', $id);

$requete->execute();
$retour["success"] = true;
$retour["message"] = "l'annonceur a été supp";


/*
$poste = $_POST['poste'];
$description = $_POST['description'];
$connaissace_technique = $_POST['connaissance_technique'];
$date_offre = $_POST['date_offre'];
$type_contrat = $_POST['type_contrat'];
$date_debut_cand = $_POST['date_debut_cand'];
$date_limit_cand = $_POST['date_limit_cand'];
$adress = $_POST['adress'];
$experience = $_POST['experience'];
$id_entreprise = $_POST['id_entreprise'];

$requete = $myPDO->prepare('INSERT INTO annonce(poste, description, connaissance_technique, date_offre, type_contrat, date_debut_cand, date_limit_cand, adress, experience, id_entreprise)
                                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

$requete->execute(array($poste, $description, $connaissace_technique, $date_offre, $type_contrat, $date_debut_cand, $date_limit_cand, $adress,$experience, $id_entreprise));
header('Location: get-annonces.php');

*/
echo json_encode($retour);
