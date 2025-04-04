<?php
$server = "localhost";  // Vai šeit ir pareizais servera nosaukums?
$username = "root";     // Vai jūsu MySQL lietotājvārds ir "root"?
$password = "root";         // Ja nepieciešams, pievienojiet savu MySQL paroli
$database = "projekts";     // Pārliecinieties, ka datubāze pastāv

// Izveidojam savienojumu ar datubāzi
$con = new mysqli($server, $username, $password, $database);

// Pārbaudām savienojumu
if ($con->connect_error) {
    die("Savienojuma kļūda: " . $con->connect_error);
}
?>
