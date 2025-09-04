<?php
include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($motdepasse, $user['motdepasse'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            header("Location: profil.php");
            exit();
        } else {
            echo "Mot de passe incorrect ❌";
        }
    } else {
        echo "Email non trouvé ❌";
    }
}
?>
