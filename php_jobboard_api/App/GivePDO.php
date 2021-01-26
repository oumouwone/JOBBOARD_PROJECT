<?php
namespace App;
use App\Database;

$AccessDB = new Database("jobboard", "root", "root", "localhost");

$myPDO = $AccessDB->getPDO();

