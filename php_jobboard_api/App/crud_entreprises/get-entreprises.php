<?php

require '../Autoloader.php';
include('../api-template.php');
use \App\Autoloader;
use \App\Table\Entreprise;
Autoloader::register();

$get_entreprise = Entreprise::getEntreprise();
$success = true;
$data['entreprise'] = $get_entreprise;

response_json($success, $data);