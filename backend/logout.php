<?php
session_start();
session_destroy();
header("Location: ../frontend/connexion.html");
exit();
?>
