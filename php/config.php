<?php

//Maak de errors zichtbaar
ini_set('display_errors', 1);
error_reporting(E_ALL);

//login gegevens (NIET BESCHIKBAAR)

//maak de connectie naar de database
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//Als de verbinding niet gelukt is, dan komt er een foutmelding op de pagina.
if (!$mysqli) {
    echo "Geen verbinding! <br>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}