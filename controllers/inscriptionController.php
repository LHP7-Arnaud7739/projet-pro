<?php

require_once '../config.php';
require_once '../models/DataBase.php';
require_once '../models/Patient.php';

$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/";
$regexMail = "/^([a-z.-]+)@([a-z]+).([a-z]){2,4}$/";
$regexPhone = "/^(?:(?:\+|00)33[\s.-]{0,3}(?:(0)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/";
$arrayError = [];

$addClientOk = false;

if (!empty($_POST)) {

    if (isset($_POST["nom"])) {
        if (empty($_POST["nom"])) {
            $arrayError["nom"] = "Veuillez saisir votre nom";
        } elseif (!preg_match($regexNom, $_POST["nom"])) {
            $arrayError["nom"] = "Format invalide";
        }
    }

    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayError["prenom"] = "Veuillez saisir votre prénom";
        } elseif (!preg_match($regexNom, $_POST["prenom"])) {
            $arrayError["prenom"] = "Format invalide";
        }
    }


    if (isset($_POST["phone"])) {
        if (empty($_POST["phone"])) {
            $arrayError["phone"] = "Veuillez saisir votre numéro de telephone";
        } elseif (!preg_match($regexPhone, $_POST["phone"])) {
            $arrayError["phone"] = "Format invalide";
        }
    }

    $ClientMail = new Clients();
    if (isset($_POST["mail"])) {
        if (empty($_POST["mail"])) {
            $arrayError["mail"] = "Veuillez saisir votre Mail";
        } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            $arrayError["mail"] = "Le format de votre mail est invalide";
        } elseif (!$ClientMail->checkFreeMail($_POST['mail'])) {
            $arrayError["mail"] = "Cette adresse mail est déjà utilisée";
        }
    }

    
    if (isset($_POST["password"])) {
        if (empty($_POST["password"])) {
        } 
    }

    if (isset($_POST["confPassword"])) {
        if (empty($_POST["confPassword"])) {
            $arrayError["confPassword"] = "Veuillez confirmer votre mot de passe";
        } elseif ($_POST["password"] != $_POST["confPassword"]) {
            $arrayError["confPassword"] = "Les mots de passe ne sont pas identique ! ";
        }
    }

    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $lastname = htmlspecialchars(strtoupper(trim($_POST['nom'])));
        $firstname = htmlspecialchars(ucwords(trim($_POST['prenom'])));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $mail = htmlspecialchars(trim($_POST['mail']));
        $password = htmlspecialchars(trim($_POST['password']));
        $confPassword = htmlspecialchars(trim($_POST['confPassword']));
        $client = new Clients();
        $client->addClient($lastname, $firstname, $phone, $mail);

        $addClientOk = true;
    }
}
