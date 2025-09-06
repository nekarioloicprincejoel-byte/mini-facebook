<?php
$host = "localhost";
$user = "root";   // ou autre utilisateur MySQL
$pass = "";       // mot de passe (souvent vide sur Awebserver)
$db   = "mini_facebook";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>
