<?php
 session_start();
 $_SESSION['login'] = false;
header("Location: acceuil.php");
?>