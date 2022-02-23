<?php

require_once '../config.php';
require_once '../models/DataBase.php';
require_once '../models/Patient.php';

if (isset($_POST["deleteClient"])) {
    $user_id = htmlspecialchars(trim($_POST["idDeleteClient"]));
    $clientObj = new CLients();
    $clientInfo = $clientObj->deleteClient($user_id);
}

$gestionClient = new CLients();
$gestionArray = $gestionClient->getAllClient();


