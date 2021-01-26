<?php

require '../Autoloader.php';
include('../api-template.php');
use \App\Autoloader;
use \App\Table\Annonceur;
Autoloader::register();

$get_annonceur = Annonceur::getAnnonceur();
$success = true;
$data['annonceur'] = $get_annonceur;

response_json($success, $data);