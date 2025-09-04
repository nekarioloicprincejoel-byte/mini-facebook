<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilisateurs (nom, email, motdepasse) 
            VALUES ('$nom', '$email', '$motdepasse')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie ✅ <a href='../frontend/connexion.html'>Connectez-vous</a>";
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>
