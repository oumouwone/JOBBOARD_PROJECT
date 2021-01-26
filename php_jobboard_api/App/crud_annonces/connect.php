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

$get_json = file_get_contents('php://input');

$obj = json_decode($get_json);

$requete = $myPDO->query("SELECT  * FROM user WHERE email =" .$obj->email."AND password ='".$obj->passowrd." LIMIT 1 \");




return $requete->fetch();
