<?php
session_start();
include "config.php";

if (isset($_SESSION["user_id"])) {
    $content = $_POST["content"];
    $user_id = $_SESSION["user_id"];

    $sql = "INSERT INTO posts (user_id, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $content);

    if ($stmt->execute()) {
        echo "Message publié avec succès !";
    } else {
        echo "Erreur : " . $stmt->error;
    }
}
?>
