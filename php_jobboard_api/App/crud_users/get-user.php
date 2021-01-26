<?php


require '../Autoloader.php';
include('../api-template.php');
use \App\Autoloader;
use \App\Table\User;
Autoloader::register();

$get_users = User::getUser();
$success = true;
$data['user'] = $get_users;

response_json($success, $data);