<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mini-Facebook</title>
  <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body>
  <h1>Bienvenue sur Mini-Facebook</h1>

  <?php if (isset($_SESSION["username"])): ?>
      <p>Bonjour <strong><?php echo $_SESSION["username"]; ?></strong> 👋</p>
      <a href="frontend/profile.html">Aller sur mon profil</a><br>
      <a href="backend/logout.php">Se déconnecter</a>
  <?php else: ?>
      <a href="frontend/login.html">Connexion</a> | 
      <a href="frontend/register.html">Inscription</a>
  <?php endif; ?>
</body>
</html>
