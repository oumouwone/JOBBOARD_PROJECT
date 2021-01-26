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

$requete = $myPDO->prepare('INSERT INTO user (first_name, last_name, phone_number, adress, code_postal, ville, pays, civilite, email, password, type_user) 
                                      VALUES (:first_name, :last_name, :phone_number, :adress, :code_postal, :ville, :pays, :civilite, :email, :password, :type_user)');


//On récupére ce que l'utilisateur envoie par POST,si on le fait pas on aura des données NULL
$get_json = file_get_contents('php://input');

//La on décode le json
$obj = json_decode($get_json);
print_r($obj);
//Et maintenant,on a des données qu'on peut passé à la request
$requete->bindParam(':first_name', $obj->first_name,PDO::PARAM_STR);
$requete->bindParam(':last_name', $obj->last_name,PDO::PARAM_STR);
$requete->bindParam(':phone_number', $obj->phone_number,PDO::PARAM_STR);
$requete->bindParam(':adress', $obj->adress,PDO::PARAM_STR);
$requete->bindParam(':code_postal', $obj->code_postal,PDO::PARAM_STR);
$requete->bindParam(':ville', $obj->ville,PDO::PARAM_STR);
$requete->bindParam(':pays', $obj->pays,PDO::PARAM_STR);
$requete->bindParam(':civilite', $obj->civilite,PDO::PARAM_STR);
$requete->bindParam(':email', $obj->email,PDO::PARAM_STR);
$requete->bindParam(':password', $obj->password,PDO::PARAM_STR);
$requete->bindParam(':type_user', $obj->type_user,PDO::PARAM_STR);


$requete->execute();
$retour["success"] = true;
$retour["message"] = "l'utilisateur a été ajouté";


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
