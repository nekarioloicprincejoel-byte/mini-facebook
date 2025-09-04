<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../frontend/connexion.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
</head>
<body>
  <h1>Bienvenue, <?php echo $_SESSION['nom']; ?> 🎉</h1>
  <p>Vous êtes connecté à votre mini réseau social !</p>
  <a href="logout.php">Se déconnecter</a>
</body>
</html>
