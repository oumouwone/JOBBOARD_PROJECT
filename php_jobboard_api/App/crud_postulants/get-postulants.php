<?php

require '../Autoloader.php';
include('../api-template.php');
use \App\Autoloader;
use \App\Table\Postulant;
Autoloader::register();

$get_postulant = Postulant::getPostulant();
$success = true;
$data['postulant'] = $get_postulant;

response_json($success, $data);