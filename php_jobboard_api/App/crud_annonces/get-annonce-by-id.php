<?php

require '../Autoloader.php';
include('../api-template.php');
use \App\Autoloader;
use \App\Table\Annonce;
Autoloader::register();

$get_annonces = Annonce::getAnnonceById($_GET['id']);
$success = true;
$data['annonce'] = $get_annonces;

response_json($success, $data);