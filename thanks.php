<?php

$nameErr = $nicknameErr = $emailErr = $phoneErr = $sujetErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])){
        $nameErr = "Le nom est requis. ";
    }
    if (empty($_POST["user_nickname"])){
        $nicknameErr = "Le prénom est requis. ";
    }
    if (empty($_POST["user_email"])){
        $emailErr = "L'email est requis. ";
    }
    if (!filter_var ($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    if (empty($_POST["phone"])){
        $phoneErr = "Le numéro de télèphone est requis. ";
    }
    if (empty($_POST["sujet"])){
        $topicErr = "Le thême est requis. ";
    }
    if (empty($_POST["user_message"])){
        $messageErr = "Le message est requis. ";
    }
    if ($nameErr . $nicknameErr . $emailErr . $phoneErr . $sujetErr . $messageErr === "") {
    echo "Merci ".$_POST['user_nickname']." ".$_POST['user_name']." de nous avoir contacté à propos de ".$_POST['sujet']. ". <br>
    Un de nos conseiller vous contactera soit à l’adresse ".$_POST['user_email']." ou par téléphone au ".$_POST['phone']." dans les plus brefs délais pour traiter votre demande : <br>
    ".$_POST['user_message'].".";
    }
}